  <!-- Start sub main Area -->
  <div class="header-area">
      <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col-lg-6 col-sm-3 col-md-3">
                  <div class="header-left-bar-text">
                      <ul class="list-inline">
                          <li>
                              <a href="https://www.facebook.com/" target="_blank">
                                  <i class='bx bxl-facebook'></i>
                              </a>
                          </li>
                          <li>
                              <a href="https://twitter.com/" target="_blank">
                                  <i class='bx bxl-twitter'></i>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.linkedin.com/" target="_blank">
                                  <i class='bx bxl-linkedin'></i>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.google.com/" target="_blank">
                                  <i class='bx bxl-google'></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-9 col-md-9">
                  <div class="header-right-content text-end">
                      <ul class="list-inline">
                          <li class="d-inline">
                              <img src="{{ asset('assets/images/phone.svg') }}" alt="Phone">
                              <a href="tel:(+0188)7689870859">(+0188) 768 987 0859</a>
                          </li>
                          <li class="d-inline">
                              <img src="{{ asset('assets/images/email.svg') }}" alt="Email">
                              <a href="mailto:info@inonthemes.com">Info@inonthemes.com</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End sub main Area -->

  <!-- Start Navbar Area -->
  <div class="navbar-area">
      <div class="main-responsive-nav">
          <div class="container">
              <div class="main-responsive-menu">
                  <div class="logo">
                      <a href="index.html">
                          <img src="{{ asset('assets/images/black-logo.webp') }}')}}" class="black-logo" alt="image">
                          <img src="{{ asset('assets/images/white-logo.webp') }}')}}" class="white-logo" alt="image">
                      </a>
                  </div>
              </div>
          </div>
      </div>

      <div class="main-navbar">
          <div class="container-fluid">
              <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="index.html">

                  </a>

                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto">
                          <li class="nav-item">
                              <a href="{{ route('home') }}" class="nav-link active">
                                  Home

                              </a>


                          </li>

                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  Pages

                              </a>


                          </li>



                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  Blog

                              </a>


                          </li>


                      </ul>

                      <div class="others-options d-flex align-items-center">
                          <div class="option-item">
                              <button class="searchbtn" type="button">
                                  <i class='bx bx-search'></i>
                              </button>
                          </div>
                          <div class="option-item">
                              <!-- Example in a Blade view -->
                              @if (session()->has('user_id'))
                                  <form method="POST" action="{{ route('proflogout') }}">
                                      @csrf
                                      @method('POST')
                                      <button type="submit" class="default-btn">Log Out</button>
                                  </form>
                              @else

                                  <a href="{{ route('login') }}" class="default-btn">Login</a>
                              @endif

                          </div>
                      </div>
                  </div>
              </nav>
          </div>
      </div>

      <div class="others-option-for-responsive">
          <div class="container">
              <div class="dot-menu">
                  <div class="inner">
                      <div class="circle circle-one"></div>
                      <div class="circle circle-two"></div>
                      <div class="circle circle-three"></div>
                  </div>
              </div>

              <div class="container">
                  <div class="option-inner">
                      <div class="others-options d-flex align-items-center">

                          <div class="option-item">
                              <button class="searchbtn" type="button">
                                  <i class='bx bx-search'></i>
                              </button>
                          </div>

                          <div class="option-item">
                              <a href="contact.html" class="default-btn">Get A Quote</a>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Navbar Area -->

  <!-- Search Area -->
  <div class="search-area">
      <div class="container">
          <button type="button" class="close-searchbox">
              <i class='bx bx-x'></i>
          </button>
          <form action="#" class="search-form">
              <div class="form-group">
                  <input type="search" placeholder="Search Here">
              </div>
          </form>
      </div>
  </div>
  <!-- Search Area -->
