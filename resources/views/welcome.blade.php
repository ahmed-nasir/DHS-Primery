@extends('layouts.frontend.app')

@section('title','index')
@section('top_header')
  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          
          <p class="p-font-15 p-white"><a href="/">{{$title->sitetitle}}</a></p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links">
            <ul>
              <li><a href="{{ route('about') }}"><i class="icon-heart2"></i>About Us</a></li>
              <li class="af-line"></li>
              <li><a href="{{route('contact')}}"><i class="icon-icons215"></i>Contact Us</a></li>
              @guest
              <li><a href="{{route('login')}}" class="header-login"><i class="icon-icons179"></i>Login</a></li>
              <li><a href="{{route('register')}}" class="header-login"><i class="icon-icons179"></i>Register</a></li> 
              @else
              <li class="nav-item dropdown">
                                <a class="header-login" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <span><i class="icon-icons179"></i>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                    <a style="display: block;" class="dropdown-item" href="{{route('user.property.create')}}">
                                    <i class="icon-icons179"></i><span class="glyphicon glyphicon-plus" style="color:red;">Add Property</span>
                                    </a>
                                    <a style="display: block;" class="dropdown-item" href="{{ route('logout') }}"
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
@endsection
@section('slider')
<!-- Navbar on Click -->
<div class="sidebar_menu">
  <nav class="pushmenu pushmenu-left">
    <a class="push-logo" href="{{route('welcome')}}"><img src="{{asset('assets/frontend/images/short_icon.png')}}" alt="logo"></a>
    <ul class="push_nav bottom20">
      <li class="dropdown active">
                <a href="{{route('welcome')}}">Homes</a>
              
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Properties</a>   
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agents</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">User Pages</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
              </li>
              
              <li class="dropdown megamenu-fw">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Showcase</a>
{{--                 <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                   <div class="row">
                      <div class="col-menu col-md-2">
                        <h5 class="title">Showcase List</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="showcase-property.html">Properties List</a></li>
                            <li><a href="showcase-property.html">Single Property</a></li>
                            <li><a href="showcase-property.html">Search by City</a></li>
                            <li><a href="showcase-property.html">Search by Category</a></li>
                            <li><a href="showcase-property.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-2">
                        <h5 class="title">Showcase List</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="showcase-property.html">Properties List</a></li>
                            <li><a href="showcase-property.html">Single Property</a></li>
                            <li><a href="showcase-property.html">Search by City</a></li>
                            <li><a href="showcase-property.html">Search by Category</a></li>
                            <li><a href="showcase-property.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-8">
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{asset('images/nav-slider1.jpg')}}" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{asset('images/nav-slider2.jpg')}}" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{asset('images/nav-slider3.jpg')}}" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul> --}}
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
              </li>
    </ul>
    <div class="clearfix"></div>
    <ul class="socials">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </nav>
</div>
<div id="menu_bars" class="left">
    <span class="t1"></span>
    <span class="t2"></span>
    <span class="t3"></span>
</div>
<!-- Header Top End -->


<!--  SLIDER  -->
<section class="rev_slider_wrapper">
  <div id="rev_full" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="crossfade">
        <img src="{{asset('assets/frontend/video/thumb.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h2 class="border_heading p-white" style="color: #ed2a28"> DEVELOPRES HOUSE SOLUTION </h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <p class="p-white text-center">Find your new property online, Be happy</p>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
      <li data-transition="fade">
        <img src="{{asset('assets/frontend/images/slide0.jpg')}}"  alt="video slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
            <div class="rs-background-video-layer" 
             data-volume="mute" 
             data-videowidth="100%" 
             data-videoheight="100%" 
             data-videomp4="video/video.mp4" 
             data-videopreload="preload" 
             data-videoloop="loop" 
             data-forceCover="1" 
             data-aspectratio="16:9" 
             data-autoplay="true" 
             data-autoplayonlyfirsttime="true" 
             data-nextslideatend="true">
            </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        <h2 class="border_heading p-white">WE FULFIL YOUR DREAM.</h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h5 class="p-white text-center">Find your new property online, Be happy</h5>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
      <li data-transition="fadefromleft">
        <img src="{{asset('assets/frontend/images/slide2.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h2 class="border_heading p-white"> We Complete Your Dreams </h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <p class="p-white text-center">Find your new property online, Be happy</p>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
    </ul>
  </div>
</section>
<!--SLIDER  --> 


<!--  Home Icons Start  -->
<div id="home_icon">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_1.html" class="home_feature">
          <i class="icon-icons215"></i>
          <h4>For Sale</h4>
          <p>Latest for sale</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="my_properties.html" class="home_feature">
          <i class="icon-key3"></i>
          <h4>For Rent</h4>
          <p>Latest for sale</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="gallery_1.html" class="home_feature">
          <i class="icon-icons74"></i>
          <h4>Beachside</h4>
          <p>Near the beach</p>
        </a>
      </div>
{{--       <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="news_details.html" class="home_feature">
          <i class="icon-stats-dots"></i>
          <h4>Reduced</h4>
          <p>Price reduced</p>
        </a>
      </div> --}}
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_3.html" class="home_feature">
          <i class="icon-icons185"></i>
          <h4>Let Us Find</h4>
          <p>Ask an agent</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_2.html" class="home_feature">
          <i class=" icon-clipboard"></i>
          <h4>Sell Property</h4>
          <p>Get in touch</p>
        </a>
      </div>
    </div>
  </div>
</div>
<!--  Home Icons End  -->
@endsection

@section('welcome_section')
<section id="wellcome" class="padding">
  <div class="container">
    <div class="row">
    <div class="col-sm-1 col-md-2"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 text-center">
        <h2 class="text-uppercase">Welcome to <span class="color_red"> Our Site</span></h2>
        <div class="line_1-1"></div>
        <div class="line_2-2"></div>
        <div class="line_3-3"></div>
        <p class="heading_space">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing
          vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
        </p>
      </div>
      <div class="col-sm-1 col-md-2"></div>
    </div>
{{--     <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_1.png" alt="image">
          <h4> 24/7 Emergency Available</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_2.png" alt="image">
          <h4>Expert and Professional</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_3.png" alt="image">
          <h4>Satisfaction Guarantee</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_4.png" alt="image">
          <h4>Free Inspection</h4>
        </div>
      </div>
    </div> --}}
  </div>
</section>
@endsection

@section('property_listing')
<div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      
    @foreach($properties as $property)
    <div class="col-md-4 col-sm-6">
      <div class="property_item bottom40">
        <div class="image">
          <?php $i=1; ?>
          @foreach($property->pimages as $pic)
          <img src="{{Storage::url('propertyImages/'.$pic->name) }}" alt="image" class="img-responsive">
           <?php $i++; if($i==2) break; ?>
          @endforeach
          <div class="property_meta">
          <span><i class="fa fa-object-group"></i>{{ $property->property_area}} sq ft </span>
          <span><i class="fa fa-bed"></i>{{ $property->property_bedroom}} Bed Room</span>
          <span><i class="fa fa-bath"></i>{{ $property->property_bathroom}} Bathroom</span></div>
          <div class="price"><span class="tag">For {{ $property->property_status}}</span></div>
          <div class="overlay">
          <div class="centered"><a class="link_arrow white_border" href="{{ route('property.details', $property->id) }}">View Detail</a></div>
          </div>
        </div>
        <div class="proerty_content">
          <div class="proerty_text">
            <h3><a href="property_details_1.html">{{ $property->property_title}}</a></h3>
            <span>{{ $property->property_address}}</span>
            <p class="p-font-15">{{ str_limit($property->property_description,100)}}</p>
          </div>
          <div class="favroute clearfix">
            <p class="pull-md-left">Tk. {{ $property->property_price}}/=</p>
            <ul class="pull-right">
              <li><a href="#."><i class="icon-video"></i></a></li>
              <li><a href="#."><i class="icon-like"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    </div>
    <div class="row">
      <div class="col-md-12">
        {{-- <ul class="pager">
          <li><a href="#.">1</a></li>
          <li class="active"><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
        </ul> --}}
        {{$properties->links()}}
      </div>
    </div>
  </div>
@endsection

@section('advance_search')
<!-- PROPERTY SEARCH -->
<section id="property-search-sev" class="property-query-area property-page-bg padding parallaxie" style="background-image: url({{asset('assets/frontend/images/search-property.jpg')}});">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom40">
        <h2 class="text-uppercase">Advanced <span class="color_red">Search</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <form action="{{ route('property-by-search') }}" method="POST" class="findus">
      @csrf
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <label>Keyword</label>
            <input type="text" name="key" class="keyword-input" placeholder="Any">
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Location</label>
              <select class="selectpicker" data-live-search="true" name="location">
                <option selected="" value="null">Any</option>
                <option>Dhaka</option>
                <option>Sylet</option>
                <option>Maymansing</option>
                <option>Savar</option>
              </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Property Status</label>
              <select class="selectpicker" data-live-search="true" name="status">
                <option class="active" value="null">Any</option>
                <option>Sell</option>
                <option>Rent</option>
              </select>
          </div>
        </div>
      </div>
      <div class="search-2">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                      <label>Bed Room</label>
                      <select class="selectpicker" data-live-search="true" name="bedroom">
                        <option class="active" value="null">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                      <label>Bath Room</label>
                      <select class="selectpicker" data-live-search="true" name="bathroom">
                        <option class="active" value="null">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                    <label>Squre Fit Min</label>
                    <input type="text" class="keyword-input" placeholder="Any" name="sqf">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-5 col-sm-6 text-right">
                  <div class="query-submit-button top10">
                    <input type="submit" class="btn_fill" value="Search">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </form>
  </div>
</section>
<!-- PROPERTY SEARCH --> 
@endsection


@section('recent_property')

@endsection

@section('experts')
<section class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom20">
        <h2 class="text-uppercase">Our <span class="color_red">experts</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
     {{--    <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing
          <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
        </p> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/CEO.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to desing</h4>
              <p>I love to introduce myself as a hardcore Web Designer.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Nasir Ahmmed</h3>
          <span>Web designer</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/Developer.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to development.</h4>
              <p>I love to introduce myself as a hardcore Web Development.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Muhammad Pavel Sarker</h3>
          <span>Web Developer</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/Marketing.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to marketing</h4>
              <p>I love to introduce myself as a hardcore marketing manager.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Linda Anderson</h3>
          <span>Marketing Manager</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection