<header class="top-heder">
    <div class="card con" style="background: #6f3b97;height: 60px">
        <marquee behavior="" direction="" class="container"  style="text-align: center">
            <h2 style="color: white;padding: 17px">ছাত্র-ছাত্রীদের জন্য বাস সার্ভিস। সিডিউল দেখুন ***Admission going on spring {{date('y')}} (50 100)% Scholarship on tuition fee.Bangla,BBA,LLB,BSc in civil,CSE,mechanical,Textile,Architecture,AMT,FDT, Marine MBA LLB</h2>
        </marquee>
    </div>

    <div></div>

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
