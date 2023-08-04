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
            <!-- Right Side Of Navbar -->
            {{-- <ul class="navbar-nav ms-auto">
               <li class="nav-item mx-0 mx-lg-1">
                  <a class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="{{ url('/avatar') }}">{{ Auth::user()->name }}</a>
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                     <a class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>
                     
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
               </li>
            </ul> --}}
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

   {{-- This is the content, change in the future if approved --}}
   <div class="container container-bg mt-4 pe-2 ps-1">
      <p class="text-center">Hi, {{ Auth::user()->name }}</p>
      <div class="row text-center">
        <div class="col-sm-3" style="background-color: #454332;"> 
            <img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 250px; margin-top: 1rem;">
            <h3 style="color: #727259; font-weight: bold;">{{$title}}</h3>
        </div>
        <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332; border-left: 0;"> 
            <h1 class="mt-5" style="font-weight: bold;">FE Content</h1>
            <br> <br> <br> <br> <br> <br>
            <div class="float-end me-5 mb-2">
                  @if(!in_array(1, json_decode($user->access_level))) 
                     <button type="button" class="btn-readmore" data-toggle="modal" data-target="#feModal">
                        Read More
                     </button>
                  @else
                     {{-- <a class='btn-readmore' href="{{ url('/nav-tab') }}">Read More</a> --}}
                     <button type="button" id="scrollNav" class="btn-readmore">Read More</button>
                  @endif
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col-6" style="border-right: 2px solid #454332;">
            <p class="text-center">The Adversary</p>
        </div>
        <div class="col-6" style="border-left: 2px solid #454332;">
            <p class="text-center">All Wealth Avatars</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
            <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1>
        </div>
        <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
            <h2 class="mt-5 me-5" style="font-weight: bold; margin-left: 3rem;">HOOK FOR OTO1 CONTENT</h2>
            <p style="font-size: 1000%; margin: 0; padding: 0; margin-left: 3rem;">10%</p>
            <div class="float-end me-5 mb-2">
                  @if(!in_array(2, json_decode($user->access_level))) 
                     <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto1Modal">
                        Read More 
                     </button>
                  @else
                     <a class='btn-readmore' href="{{ url('/oto1') }}">Read More</a>
                  @endif
            </div>
        </div>
      </div>
    <p class="text-center">OTO 2</p>
    <div class="row">
        <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
            <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1>
        </div>
        <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
            <h2 class="mt-5 me-5" style="font-weight: bold; margin-left: 3rem;">HOOK FOR OTO2 CONTENT</h2>
            <p style="font-size: 1000%; margin: 0; padding: 0; margin-left: 3rem;">10%</p>
            <div class="float-end me-5 mb-2">
                  @if(!in_array(3, json_decode($user->access_level))) 
                     <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto2Modal">
                        Read More 
                     </button>
                  @else
                     <a class='btn-readmore' href="{{ url('/oto2') }}">Read More</a>
                  @endif
            </div>
        </div>
      </div>
    <p class="text-center">OTO 3</p>
    <div class="row">
        <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
            <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1>
        </div>
        <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
            <h2 class="mt-5 me-5" style="font-weight: bold; margin-left: 3rem;">HOOK FOR OTO3 CONTENT</h2>
            <p style="font-size: 1000%; margin: 0; padding: 0; margin-left: 3rem;">10%</p>
            <div class="float-end me-5 mb-2">
                  @if(!in_array(4, json_decode($user->access_level))) 
                     <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto3Modal">
                        Read More
                     </button>
                  @else
                     <a class='btn-readmore' href="{{ url('/oto3') }}">Read More</a>
                  @endif
            </div>
        </div>
      </div>
   </div>

   <hr style="border: 3px solid #958A6D">

   <br> <br> 

   <div class="nav" id="nav-tab" role="tablist"  style="background-color: #726950">
      <button class="btn nav-button-active" id="tab1-button" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
         <p class="nav-title">Introduction</p>
      </button>
      <button class="btn" id="tab2-button" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="nav-superpowers" aria-selected="false">
         <p class="nav-title">Superpowers</p>
      </button>
      <button class="btn" id="tab3-button" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="nav-weaknesses" aria-selected="false">
         <p class="nav-title">Weaknesses</p>
      </button>
      <button class="btn" id="tab4-button" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="nav-challenges" aria-selected="false">
         <p class="nav-title">Challenges</p>
      </button>
      <button class="btn" id="tab5-button" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="nav-wealth_formula" aria-selected="false">
         <p class="nav-title">Wealth Formula</p>
      </button>
      <button class="btn" id="tab6-button" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="nav-wealth_guide" aria-selected="false">
         <p class="nav-title">Wealth Guide</p>
      </button>
   </div>
   <div class="row my-row">
         @yield('content')
   </div>
   <br> <br> <br> <br> <br>

      {{-- Modal --}}
      {{-- FE --}}
      <div class="modal fade" id="feModal" tabindex="-1" role="dialog" aria-labelledby="feModalLabel">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header d-flex justify-content-center align-items-center">
                  <h5> <i class="fas fa-exclamation-triangle"></i> Warning</h5>
               </div>
               <div class="modal-body">
                  <p class="text-center">Oops! Take a quiz first!</p>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <a class='btn btn-primary' href="{{ url('/premium') }}">Take a Quiz!</a>
               </div>
            </div>
         </div>
      </div>

      {{-- OTO1 --}}
      <div class="modal fade" id="oto1Modal" tabindex="-1" role="dialog" aria-labelledby="oto1ModalLabel">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header d-flex justify-content-center align-items-center">
                  <h5> <i class="fas fa-exclamation-triangle"></i> Warning</h5>
               </div>
               <div class="modal-body">
                  <p class="text-center">Oops! You do not have access. <br> Click the button below to upgrade.</p>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <a class='btn btn-primary' href="{{ url('/oto1') }}">Upgrade Now!</a>
               </div>
            </div>
         </div>
      </div>

      {{-- OTO2 --}}
      <div class="modal fade" id="oto2Modal" tabindex="-1" role="dialog" aria-labelledby="oto2ModalLabel">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header d-flex justify-content-center align-items-center">
                  <h5> <i class="fas fa-exclamation-triangle"></i> Warning</h5>
               </div>
               <div class="modal-body">
                  <p class="text-center">Oops! You do not have access. <br> Click the button below to upgrade.</p>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <a class='btn btn-primary' href="{{ url('/oto2') }}">Upgrade Now!</a>
               </div>
            </div>
         </div>
      </div>

      {{-- OTO3 --}}
      <div class="modal fade" id="oto3Modal" tabindex="-1" role="dialog" aria-labelledby="oto3ModalLabel">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header d-flex justify-content-center align-items-center">
                  <h5> <i class="fas fa-exclamation-triangle"></i> Warning</h5>
               </div>
               <div class="modal-body">
                  <p class="text-center">Oops! You do not have access. <br> Click the button below to upgrade.</p>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <a class='btn btn-primary' href="{{ url('/oto3') }}">Upgrade Now!</a>
               </div>
            </div>
         </div>
      </div>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      {{-- End Modal --}}

{{-- Footer --}}
<div id="footer">
   <div class="footer-logo">
      <img class="img-fluid" src="{{ asset('assets/img/wealth_avatarr.png') }}">
   </div>

   <!--<p class="small"><a href="http://individualogist.com">Home</a> | <a href="http://individualogist.com/terms-and-conditions">Terms and Conditions</a> | <a href="http://individualogist.com/privacy-policy">Privacy Policy</a> | <a href="https://individualogist.kayako.com">Support</a> | <a href="http://individualogist.com/contact">Contact</a></p>-->
   <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2022 wealthavatarr.com. All Rights Reserved</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <script>
         $(document).ready(function(){
            $("#tab1-next").click(function(){
               $("#tab2-button").click();
            });
            
            $("#tab2-next").click(function(){
               $("#tab3-button").click();
            });

            $("#tab3-next").click(function(){
               $("#tab4-button").click();
            });

            $("#tab4-next").click(function(){
               $("#tab5-button").click();
            });

            $("#tab5-next").click(function(){
               $("#tab6-button").click();
            });

            $("#tab6-next").click(function(){
               $("#tab1-button").click();
            });
         });

         var header = document.getElementById("nav-tab");
         var btns = header.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
               var current = document.getElementsByClassName("nav-button-active");
               current[0].className = current[0].className.replace("nav-button-active", "");
               this.className += " nav-button-active";
            });
         }

      </script>
      <script>
         document.getElementById('scrollNav').addEventListener('click', function() {
            const targetContent = document.getElementById('nav-tab');
            if (targetContent) {
                  targetContent.scrollIntoView({ behavior: 'smooth' });
            }
         });
      </script>
   </body>
</html>