
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" style="justify-content:space-between;" >

            <a class="navbar-brand text-center justify-content-around" href="/" ><img src="img/logo.png" alt="logo"></a>
            <ul class="d-flex align-items-center justify-content-end" style=" width:50vw; ">
                <li> <a class="nav-link {{ ($title == "homeAdmin")? 'active' : '' }}" href="/homeAdmin">Home</a> </li>
                <li> <a class="nav-link {{ ($title == "verifyPayment")? 'active' : '' }}" href="/verifyPayment">Verify Payment</a> </li>
                <li> <a class="nav-link {{ ($title == "verifyTeacher")? 'active' : '' }}" href="/verifyTeacher">Verify Teacher</a></li>
                <li> <a class="nav-link {{ ($title == "articleAdmin")? 'active' : '' }}" href="/articleAdmin">Article</a> </li>
            </ul>
            <a href="/profileAdmin" class="col navbar-brand d-flex justify-content-end "  style=" "><img src="img/notif.png" ></a>
            <a href="/profileAdmin" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>

  </nav><!-- .navbar -->
</header><!-- End Header -->
