<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'user_id'=>'required|max:191',
            'task'=>'required|max:191',
        ]);


        $task = new Task;
        $task->user_id = $request->user_id;
        $task->task = $request->task;
        $task->save();
        return response()->json(['message'=>'successfully created a task'], 200);
    }

    public function update(Request $request){
        $request->validate([
            'status'=>'required|max:191',
        ]);


        $task = Task::find($request->id);
        if(!$task){
            return response()->json(['message'=> 'task not found'], 400);
        }
        $task->status = $request->status;
        $task->update();
        return response()->json(['message'=>$task->status], 200);
    }
    public function editUser(){
        return view('user.dashboard.edit-user');
    }
}
