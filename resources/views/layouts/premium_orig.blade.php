<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/avatar.css') }}" rel="stylesheet">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!---Fontawesome CDN Link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="icon" href="{{ asset('assets/img/image/favicon.ico') }}">
	<title>{{$title}}</title>
  </head>
   <body>

   
   <!-- Navigation-->
   <nav class="navbar navbar-expand-sm text-uppercase fixed-top" id="mainNav" style="position: sticky; background-color: #6610f2;">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/avatar') }}">                        
               <div class="header-logo">
                  <img class="img-fluid" src="{{ url('assets/img/wealth_avatarr.png') }}">
               </div>
         </a>
         <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               Menu <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
               <!--<li class="nav-item mx-0 mx-lg-1">-->
                  <!-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>FE</a> -->
                  <!--<a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/basic') }}">Basic</a>-->
               <!--</li>-->
               <li class="nav-item mx-0 mx-lg-1">
                  <!-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>FE</a> -->
                  @if(!in_array(1, json_decode($user->access_level))) 
                     <button type="button" class="btn btn-secondary px-3 mb-2 mb-lg-0" data-toggle="modal" data-target="#feModal">
                        FE 
                     </button>
                  @else
                     <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/premium') }}">FE</a>
                  @endif
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  @if(!in_array(2, json_decode($user->access_level))) 
                     <button type="button" class="btn btn-secondary px-3 mb-2 mb-lg-0" data-toggle="modal" data-target="#oto1Modal">
                        OTO - 1 
                     </button>
                  @else
                     <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto1') }}">OTO - 1</a>
                  @endif

                  <!-- <a class="btn btn-secondary px-3 mb-2 mb-lg-0" href="http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4">OTO - 1</a> -->
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  @if(!in_array(3, json_decode($user->access_level))) 
                     <button type="button" class="btn btn-secondary px-3 mb-2 mb-lg-0" data-toggle="modal" data-target="#oto2Modal">
                        OTO - 2 
                     </button>
                  @else
                     <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto2') }}">OTO - 2</a>
                  @endif
                  {{-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto2') }}">OTO - 2</a> --}}
                  <!-- <a class="btn btn-secondary px-3 mb-2 mb-lg-0" href="http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4">OTO - 1</a> -->
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  @if(!in_array(4, json_decode($user->access_level))) 
                     <button type="button" class="btn btn-secondary px-3 mb-2 mb-lg-0" data-toggle="modal" data-target="#oto3Modal">
                        OTO - 3
                     </button>
                  @else
                     <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto3') }}">OTO - 3</a>
                  @endif
                  {{-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto3') }}">OTO - 3</a> --}}
                  <!-- <a class="btn btn-secondary px-3 mb-2 mb-lg-0" href="http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4">OTO - 1</a> -->
               </li>
            </ul>
            <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ms-auto">
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
               </ul>
         </div>
      </div>
   </nav>

	<div class="hero-{{$avatar}}">
      <div class="hero-image">
         <div class="hero-text">
               <!--<h2 class="mt-5">Unlock Your Sacred Archetypal Powers & Experience Abundance Across All Aspects Of Your Life.</h2>-->
               
               <div class="{{$avatar}}-img">
                  <img src="{{ asset('assets/img/image') }}/{{$avatarmiddle}}" width="50px">
               </div>
               <!--<div class="title-form mt-5 mb-4"><h4>This Exclusive Reading Is Specially Prepared For:</h4></div>-->
               <h2 class="sub-header-{{$avatar}} text-center"><strong>{{$user->name}} </strong></h2>

               <div class="container d-flex align-items-center flex-column">
                  <img width="300px" src="{{ asset('/assets/img/avatars') }}/{{$image}}" alt="..." />
                  <h2 class="sub-header-{{$avatar}} text-center">
                     {{$title}}
                  </h2>
                    <audio controls loop autoplay>
                        <source src="{{ asset('assets/audio/Frequency_of_miracles.mp3')  }}" type="audio/mpeg">
                    </audio>
               </div>
         </div>
      </div>
	</div>

   <div class="nav" id="nav-tab" role="tablist"  style="background-color: #6610f2;">
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

      <div id="footer">
        <div class="footer-logo">
        
            <img class="img-fluid" src="{{ asset('assets/img/image/wealth_avatarr.png') }}">
        </div>
    
        <!--<p class="small"><a href="http://individualogist.com">Home</a> | <a href="http://individualogist.com/terms-and-conditions">Terms and Conditions</a> | <a href="http://individualogist.com/privacy-policy">Privacy Policy</a> | <a href="https://individualogist.kayako.com">Support</a> | <a href="http://individualogist.com/contact">Contact</a></p>-->
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2022 wealthavatarr.com. All Rights Reserved</p>
    
      </div>

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
      
      @yield('javascript')

      <script>
         $('body').append('<div class="proof-container"><div id="proof-popup" class="hide-proof"><div class="bubble1"><div class="image"><img id="static-image" src="../assets/img/paypal-pic.png"></div><div class="content"><div class="who1" id="who">Georgia from Medicine Hat, Alberta</div><div class="what1" id="what">Just made a<b> $271 </b> Purchased of The WealthAvatarr™ Premium Bundle</div><div class="when1" id="when">12 minutes ago</div></div></div></div></div>');
         var pluginProofImage = "https://s3.amazonaws.com/provely-public/legacy/thumbnails/ico-7.png";
      </script>

      <script>
         var map_url_array = [pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,pluginProofImage,];
            var what_array = ["Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle",
               "Purchased The WealthAvatarr™ Premium Bundle"];

         var who_array = ["Brian - Adversary",
               "Leo - Banker",
               "Lakesha - Influencer",
               "Ryan - Conqueror",
               "Melissa - Giver",
               "Clifton - Sales Person",
               "Elisa - Capitalist",
               "Marilyn - Influencer",
               "Jose - Giver",
               "Angela - Sales Person",
               "Pongky - Influencer",
               "Krystal - Banker",
               "Russel - Banker",
               "Brandi - Giver",
               "Joe - Sales Person",
               "Jayna - Influencer",
               "Georgia - Capitalist",
               "Anahi - Capitalist",
               "Kim - Sales Person",
               "Brenda - Influencer",
               "Audra - Giver",
               "Dawn - Capitalist",
               "Timothy - Influencer",
               "Valerie - Sales Person",
               "Frank - Banker",
               "Patricia - Sales Person",
               "Felda - Sales Person",
               "Sofia - Conqueror",
               "Jakeila - Giver",
               "Chimezie - Banker",
               "Sandy - Sales Person",
               "Kenya - Influencer",
               "Patrick - Capitalist",
               "Terence - Adversary",
               "Jason - Conqueror",
               "Beth - Banker",
               "Monique - Sales Person",
               "Ronald - Conqueror",
               "Cavell - Banker",
               "Rainelle - Adversary",
               "Ted from - Adversary",
               "Marielys - Conqueror",
               "Terry - Adversary",
               "Mary - Banker",
               "Adah - Conqueror",
               "Rey - Adversary",
               "Kylie - Giver",
               "Peter - Adversary",
               "Elizabeth - Conqueror",
               "Jack - Capitalist",
               "Clinton - Capitalist",
               "Alex - Banker",
               "Kenijae - Adversary",
               "Jed - Conqueror",
               "Barb - Adversary",
               "Shawn - Adversary",
               "Kim from - Giver",
               "Daniel - Capitalist",
               "Kathie - Banker",
               "Russel - Adversary"];

         var when_array = ["2 minutes ago",
               "2 minutes ago",
               "8 minutes ago",
               "4 minutes ago",
               "5 minutes ago",
               "6 minutes ago",
               "30 minutes ago",
               "9 minutes ago",
               "5 minutes ago",
               "6 minutes ago",
               "34 minutes ago",
               "7 minutes ago",
               "2 minutes ago",
               "9 minutes ago",
               "10 minutes ago",
               "11 minutes ago",
               "12 minutes ago",
               "2 minutes ago",
               "20 minutes ago",
               "6 minutes ago",
               "8 minutes ago",
               "9 minutes ago",
               "2 minutes ago",
               "5 minutes ago",
               "8 minutes ago",
               "10 minutes ago",
               "12 minutes ago",
               "6 minutes ago",
               "8 minutes ago",
               "15 minutes ago",
               "2 minutes ago",
               "3 minutes ago",
               "7 minutes ago",
               "6 minutes ago",
               "1 minute ago",
               "12 minutes ago",
               "6 minutes ago",
               "2 minutes ago",
               "5 minutes ago",
               "2 minutes ago",
               "8 minutes ago",
               "2 minutes ago",
               "3 minutes ago",
               "4 minutes ago",
               "5 minutes ago",
               "2 minutes ago",
               "4 minutes ago",
               "5 minutes ago",
               "2 minutes ago",
               "3 minutes ago",
               "9 minutes ago",
               "10 minutes ago",
               "2 minutes ago",
               "7 minutes ago",
               "8 minutes ago",
               "2 minutes ago",
               "6 minutes ago",
               "2 minutes ago",
               "9 minutes ago",
               "3 minutes ago",
               "9 minutes ago",
               "10 minutes ago",
               "2 minutes ago",
               "7 minutes ago",
               "8 minutes ago",
               "2 minutes ago",
               "6 minutes ago",
               "2 minutes ago",
               "9 minutes ago",
               "3 minutes ago"];
         var index_array = Array.apply(null, {length: who_array.length}).map(Number.call, Number);
         var delay = 1000;
         var milisecs_hiding = 10 * 1000 - delay;
         var milisecs_to_start = 3 * 1000 - delay;
         
         function shuffle(array) {
         var currentIndex = array.length, temporaryValue, randomIndex;
         
         while (0 !== currentIndex) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;
         
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
         }
         return array;
         } 
         
         function refresh_bubble(step) {
         document.getElementById('who').innerHTML = who_array[index_array[step]];
         document.getElementById('what').innerHTML = what_array[index_array[step]];
         document.getElementById('when').innerHTML = when_array[index_array[step]];
         document.getElementById('static-image').src = map_url_array[index_array[step]];
         
         setTimeout(function() {
            document.getElementById('proof-popup').className = 'show-proof';
         
            setTimeout(function() {
               popdown_bubble(step);
            }, 7000);
         }, delay);
         }
         
         function popdown_bubble(step) {
         document.getElementById('proof-popup').className = 'hide-proof';
         
         setTimeout(function() {
            var rand_num = Math.floor(Math.random()*who_array.length);
         
            if (step < (who_array.length - 1)) {
               refresh_bubble(rand_num);
            } else {
               index_array = shuffle(index_array);
               refresh_bubble(rand_num);
            }
         }, milisecs_hiding);
         }
         
         setTimeout(function() {
         var rand_num = Math.floor(Math.random()*who_array.length);
         index_array = shuffle(index_array);
         refresh_bubble(rand_num);
         }, milisecs_to_start);
      </script>

   </body>
</html>