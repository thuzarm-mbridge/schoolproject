<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lawride Lawyer - Home</title>
  <link rel="icon" href="{{asset('img/Fevicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/Magnific-Popup/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+01432152323"><span class="align-middle"><i class="ti-mobile" style="color: lightgreen"></i></span>+014 321 523 23</a></li>
          <li><a href="mailto:info@example.com"><span class="align-middle"><i class="ti-email" style="color: lightgreen"></i></span>Info@example.com</a></li>
        </ul>
        <ul class="header-top__info">
          <li><a href="#"><i class="ti-facebook" style="color: lightgreen"></i></a></li>
          <li><a href="#"><i class="ti-twitter-alt" style="color: lightgreen"></i></a></li>
          <li><a href="#"><i class="ti-instagram" style="color: lightgreen"></i></a></li>
          <li><a href="#"><i class="ti-skype" style="color: lightgreen"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="mymenu">
      <nav class="navbar navbar-expand-lg">
        <div class="container box_1620">
          <a class="navbar-brand " href="index.html"><h3 style="font-style: bold; color:green">MYSCHOOL</h3></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
            <li class="nav-item active"><a class="nav-mylink" href="/">Home</a>
            </li>
            @if(Sentinel::check())
            <li class="nav-item active"><a class="nav-mylink" href="/logout">Logout</a>
            </li> 
            @else
            <li class="nav-item active"><a class="nav-mylink" href="/register">Register</a></li> 
            <li class="nav-item active"><a class="nav-mylink" href="/login">login</a>
            </li>
            @endif
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero Banner start =================-->      
 
  <!--================ Hero Banner end =================-->



      
      @yield('content')

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area" style="background-color: #001900">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About School</h6>
            <p>
              The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
                                 
            </div>              
          </div>
        </div>              
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>
              For business professionals caught between high OEM price and mediocre print and graphic output.                 
            </p>                
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn mybtn"><span class="lnr lnr-location"></span></button>    
                </div>                  
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Gallery</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="{{asset('img/instagram/i1.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i2.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i3.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i4.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i5.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i6.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i7.jpg')}}" alt=""></li>
              <li><img src="{{asset('img/instagram/i8.jpg')}}" alt=""></li>
            </ul>
          </div>
        </div>            
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">


<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true" style="color: green"></i> by <a href="https://colorlib.com" target="_blank" style="color: green">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f" style="color: green"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color: green"></i></a>
            <a href="#"><i class="fab fa-dribbble" style="color: green"></i></a>
            <a href="#"><i class="fab fa-behance" style="color: green"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>