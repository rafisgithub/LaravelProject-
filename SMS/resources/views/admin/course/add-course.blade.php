@extends('admin.master')
@section('title')
    Add Teacher Form
@endsection
@section('content')

    <div class="col-xl-9 mx-auto">
        <h6 class="mb-0 text-uppercase">Add Course Form</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0">Course Form</h5><br>
                        <h6>{{ session('message') }}</h6>
                    </div>
                    <hr/>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('new-course') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="teacher_id" value="{{ Session::get('teacherId') }}">
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Course Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="course_name" class="form-control" id="inputEnterYourName" placeholder="Enter Course Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Course Url</label>
                            <div class="col-sm-9">
                                <input type="text" name="slug" class="form-control" id="inputEnterYourName" placeholder="Enter Course Url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Course Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="course_code" class="form-control" id="inputEnterYourName" placeholder="Enter Course Code">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAddress4" class="col-sm-3 col-form-label">Course Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="course_description" id="inputAddress4" rows="3" placeholder="Course Description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="text" name="course_fee" class="form-control" id="inputPhoneNo2" placeholder="Course Fee">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="inputConfirmPassword2" >
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

