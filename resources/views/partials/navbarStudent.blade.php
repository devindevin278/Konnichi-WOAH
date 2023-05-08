
<header id="header" class="justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
            <ul>
                <li> <a class="nav-link {{ Request::is('homeStudent')? 'active' : '' }}" href="/homeStudent">Home</a> </li>
                <li> <a class="nav-link {{ Request::is('learnStudent/*')? 'active' : '' }}" href="/learnStudent/games">Learn</a> </li>
                <li> <a class="nav-link {{ Request::is('articleStudent')? 'active' : '' }}" href="/articleStudent">Article</a> </li>
                <li> <a class="nav-link {{ Request::is('teacher')? 'active' : '' }}" href="/teacher">Teacher</a></li>
            </ul>
            @if (auth()->user())
                <h5>Konnichiwa, {{ auth()->user()->name }}</h5>
                <a href="/profileStudent/{{ auth()->user()->id }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                @else
                <a href="/profileStudent/{{ auth()->user() }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
            @endif

  </nav><!-- .navbar -->
</header><!-- End Header -->
