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
   @include('dashboard.avatar.segment.navigation')

   {{-- This is the content, change in the future if approved --}}
   {{-- <div class="container container-bg mt-4 pe-2 ps-1"> --}}
   <div>


         <div id="side-navigation" class="content-side-nav">
            <ul>
                  <li><a href="#home"><span class="nav-color">Explore Your Avatar</span></a></li>
                  <li><a href="#superpower"><span class="nav-color">Superpower</span></a></li>
                  <li><a href="#weaknesses"><span class="nav-color">Weaknesses</span></a></li>
                  <li><a href="#challenges"><span class="nav-color">Challenges</span></a></li>
                  <li><a href="#formula"><span class="nav-color">Formula</span></a></li>
                  <li><a href="#guide"><span class="nav-color">Guide</span></a></li>
            </ul>
         </div>
         <div id="content-sections"> <!-- Adjust width as needed -->
            @yield('content')
         </div>

   
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
<div id="footer" class="fixed-bottom">
   <div class="footer-logo">
      <img class="img-fluid" src="{{ asset('assets/img/wealth_avatarr.png') }}">
   </div>
   {{-- <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2023 wealthavatar.net. All Rights Reserved</p> --}}
   <p class="small" style="font-family:Helvetica;">&copy; Copyright 2023 wealthavatar.net. All Rights Reserved</p>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   @yield('javascript')

   <script>
        // Get references to the button and content div
        const accessButton = document.getElementById('accessButton');
        const content = document.getElementById('content');

        // Add a click event listener to the button
        accessButton.addEventListener('click', function() {
            // Toggle the visibility of the content div
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block'; // Show the content
               // Scroll to the content's position
               content.scrollIntoView({ behavior: 'smooth' });
            } else {
                content.style.display = 'none'; // Hide the content
            }
        });
    </script>

   </body>
</html>