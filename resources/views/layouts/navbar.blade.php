<!-- layouts.navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">Your Library</a>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                  </li>
              @else
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>