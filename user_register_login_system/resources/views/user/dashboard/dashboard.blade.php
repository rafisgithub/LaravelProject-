@extends('user.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-icon d-xl-none">
                    <i class="bi bi-list"></i>
                </div>
                <div class="top-navbar d-none d-xl-block">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                        </li>

                    </ul>
                </div>
                <div class="top-navbar-right ms-3">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center gap-1">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <input type="submit" value="logout"class="btn btn-outline-danger">
                                    </form>
                                </div>
                            </a>

                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper">
            <div class="iconmenu">
                <div class="nav-toggle-box">
                    <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
                </div>
                <ul class="nav nav-pills flex-column">
                    <a href="{{route('dashboard')}}">
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
                        </li>
                    </a>
                </ul>
            </div>

        </aside>
        <main class="page-content">

            <h6 class="mb-0 text-uppercase text-center">User Data Table</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl NO</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('edit-user')}}">Edit</a>
                                    <form action="">Delete</form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection


