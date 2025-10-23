<nav class="navbar navbar-expand-lg navbar-success bg-success">
  <div class="container">

    <a class="navbar-brand text-white fw-bold" href="{{ route('dashboard', ['username' => request('username')]) }}">
      🌿 GreenLeaf
    </a>

    <div class="navbar-nav">
      <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="nav-link text-white">
        Dashboard
      </a>

      <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="nav-link text-white">
        Pengelolaan
      </a>

      <a href="{{ route('profile', ['username' => request('username')]) }}" class="nav-link text-white">
        Profile
      </a>

      <a href="{{ route('login') }}" class="nav-link text-warning fw-bold">
        Logout
      </a>
    </div>

  </div>
</nav>