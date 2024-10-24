<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Management United</title>

    <!-- Styles -->

     <!-- bootstrap css -->
     <link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset ('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset ('css/responsive.css')}}">
    
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- 
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link href="{{ asset('css/milligram.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script type="text/javascript">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
    </script>
    <script type="text/javascript" src={{ asset('js/app.js') }} defer>
</script>
  </head>
  <body>

    <main>
     



    <!-- header section start -->
    <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="{{ url('/') }}"><h1>Management United</h1></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                     @if (Auth::check())
                        <a class="nav-link" href="index.html">Home</a>
                        @endif
                     </li>    
                     <li class="nav-item active">
                     @if (Auth::check())
                        <a class="nav-link" href="{{ url('createProject') }}">Create Project</a>
                        @endif
                     </li>
                     
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_menu">
                        <ul>
                        @if (Auth::check())
                        <a class="button" href="{{ url('/logout') }}"> Logout </a> <span>{{ Auth::user()->name }}</span>
                        
                        @endif
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>

     





        
        <!-- @if (Auth::check())
        <a class="button" href="{{ url('/logout') }}"> Logout </a> <span>{{ Auth::user()->name }}</span>
        <a class="button" href="{{ url('createProject') }}"> Create Project</a>
        @endif -->
     
      <section id="content">
        @yield('content')
      </section>
    </main>

    <!-- footer section start -->
    <div class="footer_section layout_padding">

            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text"><a href="{{ url('aboutUs') }}">About</a></h3>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text"><a href="{{ url('services') }}">Services</a></h3>
                     
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text"><a href="{{ url('privacy') }}">Privacy</a></h3>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text"><a href="{{ url('faq') }}">FAQ</a></h3>
                  </div>
                  <div class="col-lg-3 col-md-6">
                  <li><a href="{{ url('contact') }}">Contact Us</a></li>
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer section end -->



  </body>
</html>
