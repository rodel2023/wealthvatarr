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

   {{-- This line is to play one audio at a time --}}
   <script type="text/javascript">
    function pauseOthers(element){
        $("audio").not(element).each(function(index,audio){
        audio.pause();
        })
    }
    </script>
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
                  <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
               </li>
               <li class="nav-item dropdown">
                     {{-- <a class="nav-link dropdown-toggle curve-border" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"> --}}
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Upgrades
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                           @if(!in_array(2, json_decode($user->access_level))) 
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#oto1Modal">
                                 <span style="color: #726950"> 
                                    {{-- Upgrades 1  --}}
                                    SUBCONSCIOUS REPROGAMMING 1-MINUTE SERIES
                                 </span>
                              </button>
                           @else
                              <a class="dropdown-item" href="{{ url('/oto1') }}">
                                 <span style="color: #726950"> 
                                    {{-- Upgrades 1  --}}
                                    SUBCONSCIOUS REPROGAMMING 1-MINUTE SERIES
                                 </span>
                              </a>
                           @endif
                        </li>
                           <li><hr class="dropdown-divider"></li>
                        <li>
                           {{-- Upgrades 2 --}}
                           @if(!in_array(3, json_decode($user->access_level))) 
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#oto2Modal">
                                 <span style="color: #726950">
                                    7-MINUTE WEALTH MANIFEST
                                 </span>
                              </button>
                           @else
                              <a class='dropdown-item' href="{{ url('/oto2') }}">
                                 <span style="color: #726950">
                                    7-MINUTE WEALTH MANIFEST
                                 </span>
                              </a>
                           @endif
                        </li>
                           <li><hr class="dropdown-divider"></li>
                        <li>
                           {{-- Upgrades 3 --}}
                           @if(!in_array(4, json_decode($user->access_level))) 
                              <button type="button" class="dropdown-item" data-toggle="modal" data-target="#oto3Modal">
                                 <span style="color: #726950">
                                    21-DAY MIND RESET CHALLENGE
                                 </span>
                              </button>
                           @else
                              <a class='dropdown-item' href="{{ url('/oto3') }}">
                                 <span style="color: #726950">
                                    21-DAY MIND RESET CHALLENGE
                                 </span>
                              </a>
                           @endif
                        </li>
                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                        {{-- 
                           <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span style="color: #726950">Log out</span></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form> --}}
                     </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/avatars">Avatars</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/bonuses">Your Bonuses</a>
               </li>
               <li class="nav-item">
                  {{-- <a class="nav-link" href="https://support.thriivetank.com" target="_blank">Contact Us</a> --}}
                  <a class="nav-link" href="/contact">Contact Us</a>
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
                  {{-- <a class="nav-link dropdown-toggle curve-border" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"> --}}
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                     {{-- {{ Auth::user()->name }} --}}
                     <span class="curve-border dropdown-toggle ">
                        Account
                     </span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="{{ url('/settings') }}"><span style="color: #726950">Account Settings</span></a></li>
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
   {{-- <div class="container container-bg mt-4 pe-2 ps-1"> --}}
   <div>
      @yield('content')
   </div>

      {{-- Modal --}}
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
   {{-- <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2023 wealthavatar.net. All Rights Reserved</p> --}}
   <p class="small" style="font-family:Helvetica;">&copy; Copyright 2023 wealthavatar.net. All Rights Reserved</p>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   @yield('javascript')
   </body>
</html>