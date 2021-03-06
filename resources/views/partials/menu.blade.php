
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav pushy">
    <div class="container"> 
       <div id="menu_bars" class="right">
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="home">
          <img src="{{ asset('storage/assets/images/logo-white.png')}}" alt="logo" class="logo logo-display">
        <img src="{{ asset('storage/assets/images/logo.png')}}" class="logo logo-scrolled" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <li>
            <a href="home">Home</a>
            
          </li>
          <li>
            <a href="about">About</a>
            
          </li>
          <li>
            <a href="services">Services</a>
            
          </li>
          <li>
            <a href="payment">Payment</a>
          </li>
          <li><a href="pricing">Pricing</a></li>
          <li><a href="{{ url('package') }}">Packages</a></li>
          <li><a href="contact">Contact</a></li>
          <li class="dropdown"><a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">More</a>
            <ul class="dropdown-menu animated fadeOut" style="display: none; opacity: 1;">
              <li><a href="terns-and-conditions"> T&C </a></li>
              <li><a href="privacy-policy"> Privacy Policy </a></li>
              <li><a href="faq"> FAQ </a></li>
              <li><a href="career"> Career </a></li>
              <li><a href="blog"> Blog </a></li>
              <li><a href="{{ url('storage/uploads/KYC_form.pdf') }}" target="_blank"> KYC </a></li>
              <li><a href="risk-tolrance"> Risk Tolerance </a></li>
              <li><a href="discloser"> Discloser </a></li>
            </ul>
        </ul>
      </div>
    </div>
    <div class="sidebar_menu">
        <nav class="pushmenu pushmenu-right">
          <a class="push-logo" href="{{url('home')}}"><img src="{{ asset('storage/assets/images/logo.png')}}" alt="logo"></a>
          <ul class="push_nav centered">
            <li>
            <a href="{{url('home')}}">Home</a>
            
          </li>
           <li>
            <a href="{{url('about')}}">About</a>
            
          </li>
          <li>
            <a href="{{url('services')}}">Services</a>
            
          </li>
          <li>
            <a href="{{url('payment')}}">Payment</a>
          </li>
          <li><a href="{{url('pricing')}}">Pricing</a></li>
          <li><a href="{{url('package')}}">Packages</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
          <li><a href="#">More</a></li>
                      </ul>
          </li>
          </ul>
          <div class="clearfix"></div>
          <ul class="social_icon black top25 bottom20">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#." class="instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
        </nav>
      </div>   
  </nav>
</header>