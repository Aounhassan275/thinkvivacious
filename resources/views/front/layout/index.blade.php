<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
 
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy&amp;display=swap">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{asset('front/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('front/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-98GGMGB53P"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-98GGMGB53P');
    </script>
    @toastr_css
  </head>
  <body>
    <!-- navbar-->
    <header class="header">                   
      <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
          <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
            @foreach (App\Models\Information::all()->take(1) as $information)     
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->fb}}"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->twitter}}"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->insta}}"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->pt}}"><i class="fab fa-linkedin"></i></a></li>
          </ul>
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo_new.png')}}" style="width:206px;margin-left:153px;"alt="..." ></a>
          <a class="reset-anchor text-small mb-0 h6 d-none d-lg-block" href="mailto:{{$information->email}}"><i class="far fa-envelope mr-2 text-primary"></i>{{$information->email}}</a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
        <div class="container">
          <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->fb}}"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->twitter}}"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->insta}}"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="{{$information->pt}}"><i class="fab fa-linkedin"></i></a></li>
           </ul>
          @endforeach
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <!-- Navbar link-->
                <a class="nav-link {{Request::is('/')?'active':''}}" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  {{Request::is('blog_category')?'active':''}}" id="listingVariants" href="{{route('category.index')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog Categories</a>
                <div class="dropdown-menu mt-2" aria-labelledby="listingVariants">
                    @foreach(App\Models\Category::all()->take(6) as $category)
                    <a class="dropdown-item" href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a>
                    @endforeach
                    <a class="dropdown-item" href="{{route('category.index')}}">All</a>

                </div>
            </li>
              <li class="nav-item">
                <!-- Navbar link--><a class="nav-link {{Request::is('blogs')?'active':''}}" href="{{route('blog.index')}}">Blog</a>
              </li>
              <li class="nav-item"><a class="nav-link {{Request::is('about_us')?'active':''}}" href="{{route('about.index')}}">About Us</a></li>
              <li class="nav-item"><a class="nav-link {{Request::is('contact_us')?'active':''}}" href="{{route('contact.index')}}">Contact Us</a></li>
              <li class="nav-item"><a class="nav-link {{Request::is('privacy_policy')?'active':''}}" href="{{route('privacy.index')}}">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Main post-->
    @yield('body')
    <footer class="py-4" style="background: #111">
      <div class="container text-center">
        <div class="row align-items-center">
                            @foreach (App\Models\Information::all()->take(1) as $information)     
          <div class="col-md-4 text-lg-left"><img src="{{asset($information->image)}}" alt="..." width="120"></div>
          <div class="col-md-4 text-center">
            <div class="d-flex align-items-center flex-wrap justify-content-center">
              <h6 class="text-muted mb-0 py-2 mr-3">Follow me<span class="ml-3">-</span></h6>
              <ul class="list-inline small mb-0 text-white">
                <li class="list-inline-item"><a class="reset-anchor" href="{{$information->fb}}"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="{{$information->twitter}}"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="{{$information->insta}}"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="{{$information->pt}}"><i class="fab fa-linkedin"></i></a></li>
                @endforeach   
              </ul>
            </div>
          </div>
          <div class="col-md-4 text-lg-right">
            <p class="mb-0 text-muted text-small text-heading">© 2019-20 <a href="{{url('/')}}" class="text-reset">thinkvivacious.com </a>All Rights Reserved. </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/endor/lightbox2/js/lightbox.min.js')}}v"></script>
    <script src="{{asset('front/js/front.js')}}"></script>
    <script src="{{asset('front/toastr.js')}}"></script>
    @toastr_render
    @toastr_js
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>