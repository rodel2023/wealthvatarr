   <nav class="navbar navbar-expand-sm fixed-top" id="mainNav" style="position: sticky; background-color: #726950;">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">                        
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