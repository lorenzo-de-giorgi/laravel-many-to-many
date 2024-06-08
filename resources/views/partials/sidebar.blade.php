<nav class="navbar-dark">
  <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4"><i class="fa-solid fa-square-rss"></i> Administration</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li>
        <a href="{{route('admin.dashboard')}}" class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{route('admin.projects.index')}}" class="ldg-hover nav-link text-white {{Route::currentRouteName() == 'admin.projects.index' ? 'active' : ''}}"><i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Projects</a>
      </li>
      <li>
        <a href="{{ route('admin.categories.index') }}" class="nav-link text-white {{Route::currentRouteName() === 'admin.categories.index' ? 'active' : ''}}"><i class="fa-solid fa-book-open fs-5"></i> Categories</a>
      </li>
      <li>
        <a href="{{ route('admin.technologies.index') }}" class="nav-link text-white {{Route::currentRouteName() === 'admin.technologies.index' ? 'active' : ''}}"><i class="fa-solid fa-microchip fs-5"></i> Technologies</a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{Auth::user()->name}}</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="{{route('admin.projects.create')}}">New project</a></li>
        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">Sign out</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </ul>
  </div>
</nav>