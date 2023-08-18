@extends('layouts.oto')

@section('content')
<div class="mx-auto mt-3">
	<!-- Collapsible section -->
	<div class="container">
		<div class="container-fluid" style="width: 92%">
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
								<video id="videoPlayer" width="700" height="400" controls>
									<source src="{{ asset('assets/video/oto2_video.mov') }}" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- End of collapse --}}

	<div class="nav" id="nav-tab" role="tablist" style="width: 100%">
		<button class="btn-oto nav-button-active" id="tab1-button" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
			<p class="nav-title">WELCOME + WEALTH</p>
		</button>
		<button class="btn-oto" id="tab2-button" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
			<p class="nav-title">HEALTH & WELL-BEING</p>
		</button>
		<button class="btn-oto" id="tab3-button" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
			<p class="nav-title">HEALTHY RELATIONSHIPS</p>
		</button>
	</div>
	<div class="card mx-auto">
		<div class="card-body" style="text-align: -webkit-left;">
			<div class="tab-content" id="nav-tabContent">
				<!-- Introduction Section-->
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>WELCOME + WEALTH</strong> </span>							
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<img src="{{ asset('assets/img/The '.$title_image.'.png') }}" alt="Navbar" style="height: 80px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							
							{{-- Old code --}}
							{{-- <audio controls>
								<source src="{{ asset('assets/audio/Welcome_Wealth.mp3')  }}" type="audio/mpeg">
							</audio> --}}

							<div class="row pt-2 p-2 pb-0">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Welcome_Wealth.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Welcome_Wealth.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-2">
									<a href="{{ url('download-audio/Welcome_Wealth.mp3') }}" class="btn m-0 mt-2" style="width: 100%; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>

						</div>
						<a class="btn" href="#nav-tab" id="tab1-next" >
							NEXT
						</a>
					</div>
				</div>
				<!-- SUPERPOWERS Section-->
				<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-superpowers-tab">
					<div class="row">	
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>HEALTH & WELL-BEING</strong> </span>
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<img src="{{ asset('assets/img/The '.$title_image.'.png') }}" alt="Navbar" style="height: 80px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							<div class="row pt-2 p-2 pb-0">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Health_Well_Being.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Health_Well_Being.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-2">
									<a href="{{ url('download-audio/Health_Well_Being.mp3') }}" class="btn m-0 mt-2" style="width: 100%; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>

						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab2-next">
							NEXT
						</a>
					</div>
				</div>
				<!-- WEAKNESSES Section-->
				<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-weaknesses-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>HEALTHY RELATIONSHIP</strong> </span>
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<img src="{{ asset('assets/img/The '.$title_image.'.png') }}" alt="Navbar" style="height: 80px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							
							{{-- Old Code --}}
							{{-- <audio controls>
								<source src="{{ asset('assets/audio/Healthy_Relationship.mp3')  }}" type="audio/mpeg">
							</audio> --}}

							<div class="row pt-2 p-2 pb-0">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Healthy_Relationships.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Healthy_Relationships.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-2">
									<a href="{{ url('download-audio/Healthy_Relationships.mp3') }}" class="btn m-0 mt-2" style="width: 100%; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>
							
						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab3-next">
							NEXT
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<script>
	const videoPlayer = document.getElementById('videoPlayer');
	
	// When the collapsible section is hidden (closed), stop the video
	document.getElementById('collapsibleSection').addEventListener('hidden.bs.collapse', function () {
		videoPlayer.pause();
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
@endsection