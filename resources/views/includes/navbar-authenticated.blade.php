<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="/index.html" class="navbar-brand">
          <img src="/images/logo.svg" alt="logo" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <!-- munculkan humberger menu dengan class navbar-toggler-icon -->
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navigasi -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/categories.html" class="nav-link">Categories</a>
            </li>
          </ul>
          <!-- desktop menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="navbar-item dropdown">
              <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture">Hi, Afif
              </a>
              <div class="dropdown-menu">
                <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-empty.svg" alt="">
              </a>
            </li>
          </ul>

          <!-- mobile nav -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">Hi, Afif</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">
                cart
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
