
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
            <ul>
                <li> <a class="nav-link {{ Request::is('homeTeacher')? 'active' : '' }}" href="/homeTeacher">Home</a> </li>
                <li> <a class="nav-link {{ Request::is('notificationTeacher')? 'active' : '' }}" href="/notificationTeacher">Notification</a> </li>
                {{-- <li> <a class="nav-link {{ Request::is('teacherSchedule')? 'active' : '' }}" href="/teacherSchedule">Schedule</a></li> --}}
                <li> <a class="nav-link {{ Request::is('articleTeacher')? 'active' : '' }}" href="/articleTeacher">Article</a> </li>
            </ul>
            {{-- <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a> --}}
            <div class="d-flex justify-content-end align-items-center">
                @if (auth()->user())

                        <a>Konnichiwa, {{ auth()->user()->name }}</a>
                        <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" style="
                            background-color: solid #FF8BA7;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                    {{-- <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('storage/'. $user->photo) }}" style="
                        background-color: solid #FF8BA7;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        overflow:hidden;" ></a> --}}
                    @else
                    <a href="/profileTeacher/{{ auth()->user() }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                @endif
            </div>
  </nav><!-- .navbar -->
</header><!-- End Header -->
