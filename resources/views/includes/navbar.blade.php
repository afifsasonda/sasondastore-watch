<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="/images/logo.png" alt="logo" />
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
      >
        <!-- munculkan humberger menu dengan class navbar-toggler-icon -->
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navigasi -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/about') }}" class="nav-link">About</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
          </li>
          <form action="{{ url('/logout') }}" method="post">
            @csrf
            <li class="nav-item">
              <a href="{{ url('/logout') }}" class="btn btn-primary nav-link px-4 text-white">Logout</a>
            </li>
        </form>
          @else
          <li class="nav-item">
            <a href="{{ url('/register') }}" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/login') }}" class="btn btn-primary nav-link px-4 text-white">Sign In</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
