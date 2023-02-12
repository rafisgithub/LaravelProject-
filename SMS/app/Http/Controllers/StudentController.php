<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    public $image,$imageName,$directory,$imgUrl;
    public function studentRegister(){
        return view('frontEnd.student.register');
    }
    public function saveStudent(Request $request){
       $student= new Student();
       $student->student_name =$request->student_name;
       $student->student_email =$request->student_email;
       $student->student_phone =$request->student_phone;
       $student->password =bcrypt($request->password);
       if ($request->file('image')){
           $student->image =$this->saveImage($request);
       }
       $student->address =$request->address;
       $student->save();
        return back();
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/student-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function studentLogin(){
        return view('frontEnd.student.login');
    }
    public function studentLoginCheck(Request $request){
        $studentInfo =Student::where('student_email',$request->user_name)
                ->orWhere('student_phone',$request->user_name)
                ->first();
        if ($studentInfo){
            $existingPassword=$studentInfo->password;
            if (password_verify($request->password,$existingPassword)){

                Session::put('studentId',$studentInfo->id);
                Session::put('studentName',$studentInfo->student_name);

                return  redirect('/');
            }else{
                return back()->with('message','please valid password');
            }
        }else{
            return back()->with('message','please valid Email or Phone');
        }
    }
    public function studentLogout(){
        Session::forget('studentId');
        Session::forget('studentName');
        return  redirect('/');
    }
}
