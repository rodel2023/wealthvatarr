<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/avatar.css') }}" rel="stylesheet">
	<!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!---Fontawesome CDN Link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="icon" href="{{ asset('assets/img/image/favicon.ico') }}">

   {{-- This line is to play one audio at a time --}}
   <script type="text/javascript">
    function pauseOthers(element){
        $("audio").not(element).each(function(index,audio){
        audio.pause();
        })
    }
    </script>
	<title>{{$title}}</title>
  </head>
   <body>

   <!-- Navigation-->
   <nav class="navbar navbar-expand-sm fixed-top" id="mainNav" style="position: sticky; background-color: #726950">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/avatar') }}">                        
               <div class="header-logo">
                  <img class="img-fluid" src="{{ url('assets/img/wealth_avatarr.png') }}">
               </div>
         </a>
         <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color: #ffffff">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/">Upgrades</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/">Avatars</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/">Your Bonuses</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/">Contact Us</a>
               </li>
            </ul>
            <ul class="d-flex navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle curve-border" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                     {{-- {{ Auth::user()->name }} --}}
                     Account
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="{{ url('/') }}"><span style="color: #726950">Settings</span></a></li>
                     {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                     <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span style="color: #726950">Log out</span></a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container">
         @yield('content')
   </div>
   <br> <br> <br> <br> <br>

   {{-- Footer --}}
   <div id="footer">
      <div class="footer-logo">
         <img class="img-fluid" src="{{ asset('assets/img/wealth_avatarr.png') }}">
      </div>

      <!--<p class="small"><a href="http://individualogist.com">Home</a> | <a href="http://individualogist.com/terms-and-conditions">Terms and Conditions</a> | <a href="http://individualogist.com/privacy-policy">Privacy Policy</a> | <a href="https://individualogist.kayako.com">Support</a> | <a href="http://individualogist.com/contact">Contact</a></p>-->
      <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2022 wealthavatarr.com. All Rights Reserved</p>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      @yield('javascript')
   </body>
</html>
