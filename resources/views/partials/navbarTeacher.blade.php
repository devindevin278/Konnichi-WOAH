
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
            <ul>
                <li> <a class="nav-link {{ Request::is('homeTeacher')? 'active' : '' }}" href="/homeTeacher">Home</a> </li>
                <li> <a class="nav-link {{ Request::is('notificationTeacher')? 'active' : '' }}" href="/notificationTeacher">Notification</a> </li>
                <li> <a class="nav-link {{ Request::is('articleTeacher')? 'active' : '' }}" href="/articleTeacher">Article</a> </li>
            </ul>
            <div class="d-flex justify-content-end align-items-center">
                @php
                    $user = App\Models\User::all();
                @endphp
                @if (auth()->user())

                        <a>Konnichiwa, {{ auth()->user()->name }}</a>
                        @if (auth()->user()->photo)
                        <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('storage/'.auth()->user()->photo) }}" style="
                            background-color: solid #FF8BA7;

                            height: 40px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @else
                        <a href="/profileTeacher" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" style="
                            background-color: solid #FF8BA7;

                            height: 40px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @endif
                    @else
                    <a href="/profileTeacher/{{ auth()->user() }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                @endif
            </div>
  </nav><!-- .navbar -->
</header><!-- End Header -->
