
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/">Logo</a>
            <ul>
                <li> <a class="nav-link {{ ($title == "homeAdmin")? 'active' : '' }}" href="/homeAdmin">Home</a> </li>
                <li> <a class="nav-link {{ ($title == "verifyPayment")? 'active' : '' }}" href="/verifyPayment">Verify Payment</a> </li>
                <li> <a class="nav-link {{ ($title == "verifyTeacher")? 'active' : '' }}" href="/verifyTeacher">Verify Teacher</a></li>
                <li> <a class="nav-link {{ ($title == "articleAdmin")? 'active' : '' }}" href="/articleAdmin">Article</a> </li>
            </ul>
            <a href="/profileAdmin" class="navbar-brand"  ><img class="card-img-top" src="{{ asset('img/PROFILE.png') }}" ></a>

  </nav><!-- .navbar -->
</header><!-- End Header -->
