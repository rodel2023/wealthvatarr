@extends('layouts.oto')

@section('content')
	<div class="nav" id="nav-tab" role="tablist"  style="background-color: #726950;">
		<button class="btn-oto nav-button-active" id="tab1-button" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
			<p class="nav-title">HEALTH & WELL-BEING</p>
		</button>
		<button class="btn-oto" id="tab2-button" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
			<p class="nav-title">WELCOME + WEALTH</p>
		</button>
		<button class="btn-oto" id="tab3-button" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
			<p class="nav-title">HEALTHY RELATIONSHIPS</p>
		</button>
	</div>
	<div class="card mx-auto" style="width: 60rem;">
		<div class="card-body" style="text-align: -webkit-left;">
			<div class="tab-content" id="nav-tabContent">
				<!-- Introduction Section-->
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>HEALTH & WELL-BEING</strong> </span>
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Section Content-->
							<div class="row">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Health_Well_Being.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Health_Well_Being.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-1">
									<a href="{{ url('download-audio/Health_Well_Being.mp3') }}" class="btn m-0 mt-2" style="width: 100%; background-color: #5597C3; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>

						</div>
						<a class="btn-next" href="#nav-tab" id="tab1-next" >
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
								<span  class="text-danger"> <strong>WELCOME + WEALTH</strong> </span>							
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Section Content-->
							
							{{-- Old code --}}
							{{-- <audio controls>
								<source src="{{ asset('assets/audio/Welcome_Wealth.mp3')  }}" type="audio/mpeg">
							</audio> --}}

							<div class="row">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Welcome_Wealth.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Welcome_Wealth.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-1">
									<a href="{{ url('download-audio/Welcome_Wealth.mp3') }}" class="btn m-0 mt-2" style="width: 100%; background-color: #5597C3; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>

						</div>
						<a class="btn-next" href="#nav-tab" id="tab2-next">
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
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Section Content-->
							
							{{-- Old Code --}}
							{{-- <audio controls>
								<source src="{{ asset('assets/audio/Healthy_Relationship.mp3')  }}" type="audio/mpeg">
							</audio> --}}

							<div class="row">
								<div class="col-10 pt-1">
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);" style="width: 100%;">
										{{-- <source src="{{ asset('assets/audio/Healthy_Relationships.mp3')  }}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/Healthy_Relationships.mp3') }}" type="audio/mp3">
									</audio>
								</div>
								<div class="col-2 pt-1">
									<a href="{{ url('download-audio/Healthy_Relationships.mp3') }}" class="btn m-0 mt-2" style="width: 100%; background-color: #5597C3; border-radius: 25px; font-size: 10px;">Download</a>
								</div>
							</div>
							
						</div>
						<a class="btn-next" href="#nav-tab" id="tab3-next">
							NEXT
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

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