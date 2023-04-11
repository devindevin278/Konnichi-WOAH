
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/">Logo</a>
            <ul>
                <li> <a class="nav-link {{ ($title == "home")? 'active' : '' }}" href="/home">Home</a> </li>
                <li> <a class="nav-link {{ ($title == "learn")? 'active' : '' }}" href="/learn">Learn</a> </li>
                <li> <a class="nav-link {{ ($title == "article")? 'active' : '' }}" href="/article">Article</a> </li>
                <li> <a class="nav-link {{ ($title == "teacher")? 'active' : '' }}" href="/teacher">Teacher</a></li>
            </ul>
            <a class="navbar-brand" href="/profile" ><img class="card-img-top" src="{{ asset('img/PROFILE.png') }}"></a>

  </nav><!-- .navbar -->
</header><!-- End Header -->
