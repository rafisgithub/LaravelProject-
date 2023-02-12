@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>sl no</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>
                            <img src="{{ asset($teacher->image) }}" style="height: 50px;width: 50px" alt="">
                        </td>
                        <td>{{ $teacher->address }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <span>
                                <form action="{{ route('teacher-delete') }}" method="post" id="delete">
                                    @csrf
                                    <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
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
