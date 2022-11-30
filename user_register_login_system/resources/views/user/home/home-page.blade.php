@extends('user.master')
@section('title')
Home
@endsection
@section('content')
    <br><br><br><br><br>
    <div class="container pt-10">
        <div class="card">
            <div class="card-body">
                <div class="table text-center">
                    <tr>
                        <td><h1>Here User Register And logIn option</h1></td>
                    </tr>
                </div>
            </div>
        </div>
    </div>

   <div class="container pt-10">
       <div class="card">
           <div class="card-body">
              <div class="table text-center">
                  <tr>
                      <td ><a href="{{route('login')}}" class="btn btn-outline-primary ">Log In</a></td>
                  </tr>
              </div>
           </div>
       </div>
   </div>
   <div class="container pt-10">
       <div class="card">
           <div class="card-body">
               <div class="table text-center">
                   <tr>
                       <td><a href="{{route('register')}}" class="btn btn-outline-primary ">Register</a></td>
                   </tr>
               </div>
           </div>
       </div>
   </div>
@endsection
