{{-- @extends('layouts.oto') --}}
@extends('layouts.premium')

@section('content')
<div class="container">
<div class="mx-auto mt-3">
	<!-- Collapsible section -->
	<div class="accordion" id="collapsibleSection">
		<div class="accordion-item" style="background-color: #726950">
			<!-- Collapsible Header -->
			<h2 class="accordion-header" id="sectionHeader">
				<button class="accordion-button @if(!request('collapse')) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent" style="background-color: #726950;">
					<div style="font-size: 20px; color: white; margin-left: 35%;">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle me-2" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
						</svg>	
							Watch The Training Guide Here
					</div>
				</button>
			</h2>

			<!-- Collapsible Content -->
			<div id="collapseContent" class="accordion-collapse collapse" aria-labelledby="sectionHeader" data-bs-parent="#collapsibleSection">
				<div class="accordion-body text-center">
					<!-- Centered Local Video Embed -->
					<div class="d-flex justify-content-center">
						<video id="videoPlayer" class="videoPlayer" width="700" height="400" controls>
							<source src="{{ asset('assets/video/oto2_video.mov') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- End of collapse --}}
	<div class="card mx-auto mt-3">
		<div class="card-body" style="text-align: -webkit-left;">
			<div class="tab-content" id="nav-tabContent">
				<!-- Introduction Section-->
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>YOUR 7-MINUTE WEALTH MANIFESTATION</strong> </span>							
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<video id="videoPlayermain" class="videoPlayer" width="700" height="400" controls>
									<source src="{{ asset('assets/video/oto2_video1.mov') }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<!-- Section Content-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Collapsible section -->
			<div class="accordion mt-3" id="collapsibleSection1">
				<div class="accordion-item" style="background-color: #726950">
					<!-- Collapsible Header -->
					<h2 class="accordion-header" id="sectionHeader">
						<button class="accordion-button @if(!request('collapse')) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent1" aria-expanded="false" aria-controls="collapseContent1" style="background-color: #726950;">
							<div style="font-size: 20px; color: white; margin-left: 35%;">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle me-2" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
								</svg>	
								Your Bonus Manifestation Guides
							</div>
						</button>
					</h2>

					<!-- Collapsible Content -->
					<div id="collapseContent1" class="accordion-collapse collapse" aria-labelledby="sectionHeader" data-bs-parent="#collapsibleSection1">
						<div class="accordion-body text-center">
							<h4 class="text-center">
								<span style="color: white;"> <strong>YOUR 7-MINUTE HEALTH & WELL-BEING MANIFESTATION</strong> </span>							
							</h4>
							<!-- Icon Divider-->
							<!-- Centered Local Video Embed -->
							<div class="d-flex justify-content-center">
								<video id="videoPlayer1" class="videoPlayer" width="700" height="400" controls>
									<source src="{{ asset('assets/video/oto2_video2.mov') }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<hr>
							<h4 class="text-center">
								<span style="color: white;"> <strong> YOUR 7-MINUTE HEALTHY RELATIONSHIP MANIFESTATION </strong> </span>							
							</h4>
							<!-- Icon Divider-->
							<!-- Centered Local Video Embed -->
							<div class="d-flex justify-content-center">
								<video id="videoPlayer2" class="videoPlayer" width="700" height="400" controls>
									<source src="{{ asset('assets/video/oto2_video3.mov') }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
	{{-- End of collapse --}}
	<!-- Collapsible section -->
	{{-- <div class="container mt-3">
		<div class="container-fluid" style="width: 95%">
			<div class="accordion" id="collapsibleSection">
				<div class="accordion-item" style="background-color: #726950">
					<!-- Collapsible Header -->
					<h2 class="accordion-header" id="sectionHeader">
						<button class="accordion-button @if(!request('collapse')) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent2" aria-expanded="false" aria-controls="collapseContent2" style="background-color: #726950;">
							<div style="font-size: 20px; color: white; margin-left: 27%;">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle me-2" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
								</svg>	
							</div>
						</button>
					</h2>

					<!-- Collapsible Content -->
					<div id="collapseContent2" class="accordion-collapse collapse" aria-labelledby="sectionHeader" data-bs-parent="#collapsibleSection">
						<div class="accordion-body text-center">
							<!-- Centered Local Video Embed -->
							<div class="d-flex justify-content-center">
								<video id="videoPlayer" width="700" height="400" controls>
									<source src="{{ asset('assets/video/oto2_video2.mov') }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	{{-- End of collapse --}}

	</div>
</div>
<script>
	const videoPlayer = document.getElementById('videoPlayer');
	const videoPlayer1 = document.getElementById('videoPlayer1');
	const videoPlayer2 = document.getElementById('videoPlayer2');
	
	// When the collapsible section is hidden (closed), stop the video
	document.getElementById('collapsibleSection').addEventListener('hidden.bs.collapse', function () {
		videoPlayer.pause();
	});
	// When the collapsible section is hidden (closed), stop the video
	document.getElementById('collapsibleSection1').addEventListener('hidden.bs.collapse', function () {
		videoPlayer1.pause();
		videoPlayer2.pause();
	});
</script>

@endsection

@section('javascript')
	<script>
		$(document).ready(
		function(){
		$("#tab1-next").click(function(){
			$("#tab2-button").click();
		});
		
		$("#tab2-next").click(function(){
			$("#tab3-button").click();
		});

		$("#tab3-next").click(function(){
			$("#tab1-button").click();
		});
	});

	var header = document.getElementById("nav-tab");
	var btns = header.getElementsByClassName("btn-oto");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
	var current = document.getElementsByClassName("nav-button-active");
	current[0].className = current[0].className.replace("nav-button-active", "");
	this.className += " nav-button-active";
	});
	}
	</script>
	<script type="text/javascript">
  $(document).ready(function () {
    $(".videoPlayer").on("play", function () {
      // Pause other videos when a new one starts playing
      const currentVideo = this;
      pauseOthers(currentVideo);
    });

    function pauseOthers(element) {
      $(".videoPlayer").not(element).each(function (index, video) {
        video.pause();
      });
    }
  });
	</script>
@endsection