<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('/') }}"><img src="{{asset('frontEndAsset')}}/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{ route('/') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link" href="{{ route('course') }}">Courses</a></li>
                    <li><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>
                    @if(Session::get('studentId'))
                        <li><a class="nav-link" href="{{ route('student-login') }}">{{ Session::get('studentName') }}</a></li>
                        <li><a class="nav-link" href="{{ route('student-logout') }}">Logout</a></li>

                    @else
                        <li><a class="nav-link" href="{{ route('student-login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('student-register') }}">Register</a></li>
                    @endif

                    @if(Session::get('teacherId'))
                        <li><a class="nav-link" href="{{ route('teacher-profile') }}">{{ Session::get('teacherName') }}</a></li>
                        <li><a class="nav-link" href="{{ route('teacher-logout')}}">Logout</a></li>
                    @else
                        <li><a class="nav-link" href="{{ route('teacher-login') }}">Teacher login</a></li>
                    @endif

                </ul>
            </div>

        </div>
    </nav>
</header>
