  <link rel="icon" href="{{asset('img/Fevicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/Magnific-Popup/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header text-white" style="background-color: green">Login</div>

                <div class="card-body">
                  <form method="post" action="{{route('postLogin')}}">
                        @csrf
                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right"><i class="fa fa-envelope-square" 
                          style="font-size:36px;color:green"></i></label>
                          <div class="col-md-6">
                          <input id="email" type="email" class="form-control " name="email" placeholder="Enter your E-mail" value=""requiredautocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right"><i class="fa fa-lock"style="font-size:
                          40px;color:green"></i>
                          </label>

                          <div class="col-md-6">
                          <input id="password" type="password" class="form-control "name="password" placeholder="Enter your password" required autocomplete="current-password">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" >
                            <label class="form-check-label" for="remember">
                            Remember Me</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-success" id="lgin">Login</button>

                          <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-link">
                          Login with Facebook
                          </a>

                          <a href="{{ route('social.oauth', 'github') }}" class="btn btn-link offset-md-3">
                          Login with Github
                          </a>
                          </div>
                        </div>
                        
        
                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
         
<script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}">
</script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>