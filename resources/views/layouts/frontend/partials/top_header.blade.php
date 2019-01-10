  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <p class="p-font-15 p-white"><a href="/">Developer House Solution</a></p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links">
            <ul>
              <li><a href="{{ route('about') }}"><i class="icon-heart2"></i>About Us</a></li>
              <li class="af-line"></li>
              <li><a href="{{ route('contact') }}"><i class="icon-icons215"></i>Contact Us</a></li>

              @guest
              <li><a href="{{route('login')}}" class="header-login"><i class="icon-icons179"></i>Login</a></li>
              <li><a href="{{route('register')}}" class="header-login"><i class="icon-icons179"></i>Register</a></li>
              
              @else
              <li class="nav-item dropdown">
                                <a class="header-login" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <span><i class="icon-icons179"></i>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-icons179"></i><span style="color:red;">Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              @endguest

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="{{route('welcome')}}"><img src="{{asset('assets/frontend/images/logo-2.png')}}" alt="logo"/></a></div>
        <d  iv class="col-md-10 col-sm-12 col-xs-12">
          <div class="get-tuch text-left top20">
            <i class="icon-telephone114"></i>
            <ul>
              <li>
                <h4>Phone Number</h4>
              </li>
              <li>
                <p>+8801689044066</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="{{asset('assets/frontend/images/get-tuch-line.png')}}" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class="icon-icons74"></i>
            <ul>
              <li>
                <h4>Uttara,</h4>
              </li>
              <li>
                <p>DHS, Bangladesh</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="{{asset('assets/frontend/images/get-tuch-line.png')}}" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class=" icon-icons142"></i>
            <ul>
              <li>
                <h4>Email Address</h4>
              </li>
              <li>
                <p><a href="#">info@dhs.com</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand sticky_logo" href="index.html"><img src="images/logo-white.png" class="logo" alt=""></a>
          </div>
          <!-- End Header Navigation --> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
              <li class="dropdown">
                <a href="/">Homes</a>
              </li>
              <li>
                <a href="{{ route('about') }}">About Us</a>
              </li>
              <li>
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
{{--                 <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Property Listing</a>
                    <ul class="dropdown-menu">
                      <li><a href="listing-1.html">Property Listing V - 1</a></li>
                      <li><a href="listing-2.html">Property Listing V - 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Property Details</a>
                    <ul class="dropdown-menu">
                      <li><a href="property-details-1.html">Property Details V - 1</a></li>
                      <li><a href="property-details-2.html">Property Details V - 2</a></li>
                      <li><a href="property-details-3.html">Property Details V - 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Creat New Property</a>
                    <ul class="dropdown-menu">
                      <li><a href="submit-property.html">Creat New Property V - 1</a></li>
                      <li><a href="submit-property-2.html">Creat New Property V - 2</a></li>
                    </ul>
                  </li>
                </ul> --}}
              </li>
              
              <li>
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agents</a>
              </li>
              
              
              <li>
                <a href="{{ route('contact') }}">Contact Us</a>
                
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
            
    </div>
    </div>
  </div>
  <!--===== #/HEADER BOTTOM =====-->