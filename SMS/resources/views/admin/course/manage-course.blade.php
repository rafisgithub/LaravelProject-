@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>sl no</th>
                        <th>Teacher Name</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Course Description</th>
                        <th>Course fee</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ substr($course->course_name,0,20) }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ substr($course->course_description,0,50) }}</td>
                            <td>{{ $course->course_fee }}</td>
                            <td>
                                <img src="{{ asset($course->image) }}" style="height: 50px;width: 50px" alt="">
                            </td>

                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <span>
                                <form action="{{ route('teacher-delete') }}" method="post" id="delete">
                                    @csrf
                                    <input type="hidden" name="teacher_id" value="{{ $course->id }}">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure !!!')">
                                </form>
                            </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
