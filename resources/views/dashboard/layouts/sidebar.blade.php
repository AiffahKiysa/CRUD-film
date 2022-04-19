<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/Netflix*') ? 'active' : '' }}" href="/dashboard/Netflix">
            <span data-feather="file-text"></span>
            Netflix Film
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/Apple TV*') ? 'active' : '' }}" href="/dashboard/Apple TV">
            <span data-feather="file-text"></span>
            Apple Film
          </a>
        </li>
      </ul>
      
    </div>
  </nav>