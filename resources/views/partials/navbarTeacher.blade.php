
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"><img src="img/logo.png" alt="logo"></a>
            <ul>
                <li> <a class="nav-link {{ ($title == "homeTeacher")? 'active' : '' }}" href="/homeTeacher">Home</a> </li>
                <li> <a class="nav-link {{ ($title == "notificationTeacher")? 'active' : '' }}" href="/notificationTeacher">Notification</a> </li>
                <li> <a class="nav-link {{ ($title == "teacherSchedule")? 'active' : '' }}" href="/teacherSchedule">Schedule</a></li>
                <li> <a class="nav-link {{ ($title == "articleTeacher")? 'active' : '' }}" href="/articleTeacher">Article</a> </li>
            </ul>
            <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>

  </nav><!-- .navbar -->
</header><!-- End Header -->
