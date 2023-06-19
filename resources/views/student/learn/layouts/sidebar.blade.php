<nav id="sidebarMenu" class=" col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse m-0">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('learnStudent/games') ? 'active' : '' }}" aria-current="page" href="/learnStudent/games">
            <span data-feather="home" class="align-text-bottom"></span>
            <img src="{{ asset('img/learn/games.png') }}" alt="">
            GAMES
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('learnStudent/cards*') ? 'active' : '' }}" href="/learnStudent/cards/hiragana">
            <span data-feather="file-text" class="align-text-bottom"></span>
            <img src="{{ asset('img/learn/hiragana.png') }}" alt="">
            CARDS
          </a>
        </li>
        <li class="nav-item p-0">
          <a class="nav-link {{ Request::is('learnStudent/studentLeaderboard*') ? 'active' : '' }}" href="/learnStudent/studentLeaderboard">
            <span data-feather="file-text" class="align-text-bottom"></span>
            <img src="{{ asset('img/learn/leaderboard.png') }}" alt="">
            LEADERBOARD
          </a>
        </li>

      </ul>
    </div>
  </nav>
