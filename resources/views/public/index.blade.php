
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Flattern - Flat and trendy bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('assets/public/asset/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/public/asset/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/public/asset/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/public/asset/css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/public/asset/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/public/asset/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/public/asset/skins/default.css')}}" rel="stylesheet" />
</head>

<body>

<div id="app">
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="container">

        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>

        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="{{ asset('assets/public/asset/img/logo.png')}}" alt="" class="logo" /></a>
              <h1>Flat and trendy bootstrap template</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">

                    <li class="dropdown active">
                       <router-link to="/">Home</router-link>
                    </li>

                    <li><a href="#">About Us</a></li>

                    <li>
                       <router-link to="/blog">Blog </router-link>
                    </li>

                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Gallery</a></li>  
                    <li><a href="#">Contact </a></li>

                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>

    <home-main></home-main>

    <footer>
      <div class="container">
        <div class="row">

          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>

          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>

         <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              
              <div class="clear">
              </div>
            </div>
          </div>
          
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
				<strong>Flattern studio, Pte Ltd</strong><br>
					Springville center X264, Park Ave S.01<br>
					Semarang 16425 Indonesia
				</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>

        </div>
      </div>

      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </footer>

  </div>
</div>

  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>  
  <script src="{{ asset('js/app.js')}}"><script>
  <script src="{{ asset('assets/public/asset/js/jquery.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/bootstrap.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jcarousel/jquery.jcarousel.min.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.fancybox.pack.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.fancybox-media.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/portfolio/setting.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.flexslider.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/modernizr.custom.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.ba-cond.min.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/jquery.slitslider.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/animate.js')}}"></script>
  <script src="{{ asset('assets/public/asset/js/custom.js')}}"></script>

</body>
</html>