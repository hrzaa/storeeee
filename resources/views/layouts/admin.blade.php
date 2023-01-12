<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ url('/style/main.css') }}" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- SIDE BAR -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" alt="" class="my-4 " style="max-width: 150px" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard.html"
              class="list-group-item list-group-item-action"
              >Dashboard</a
            >
            <a
              href="  "
              class="list-group-item list-group-item-action"
              >Products</a
            >
            <a
              href="  "
              class="list-group-item list-group-item-action"
              >Categories</a
            >
            <a
              href=""
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href=""
              class="list-group-item list-group-item-action"
              >Users</a
            >
            <a
              href=""
              class="list-group-item list-group-item-action"
              >Sign Out</a
            >
          </div>
        </div>

         <!-- PAGE CONTENT -->
          <div id="page-content-wrapper">
            <nav
              class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
              data-aos="fade-down"
            >
              <div class="container-fluid">
                <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                  &laquo;Menu
                </button>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                  <!-- DESKTOP MENU -->
                    <ul class="navbar-nav d-none d-lg-flex ml-auto">
                      <li class="nav-item dropdown">
                        <a
                          href="#"
                          class="nav-link"
                          id="navbarDropdown"
                          role="Button"
                          data-toggle="dropdown"
                        >
                          <img
                            src="/images/icon-user.png"
                            alt=""
                            class="rounded-circle mr-2 profile-picture"
                          />
                          Hi, Hareza
                        </a>
                        <div class="dropdown-menu">
                          <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                          <a href="/dashboard-account.html" class="dropdown-item"
                            >Setting</a
                          >
                          <div class="dropdown-divider"></div>
                          <a href="/" class="dropdown-item">Logout</a>
                        </div>
                      </li>
                      <li>
                        <li class="nav-item">
                          <a href="#" class="nav-link d-inline-block mt-2">
                             <img src="/images/icon-cart-filled.svg" alt="">
                            <div class="card-badge">3</div>
                          </a>
                        </li>
                      </li>
                    </ul>

                    <!-- MOBILE MENU -->
                    <ul class="navbar-nav d-block d-lg-none">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Hi, Hareza
                        </a>
                      </li>
                    </ul>
                </div>
              </div>
            </nav>
            
            {{-- Content --}}
            @yield('content')

          </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
    <script>
      $("#menu-toggle").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");  
      })
    </script>
    @stack('addon-script')
  </body>
</html>