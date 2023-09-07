{{-- @extends('layouts.oto') --}}
@extends('layouts.premium')

@section('content')
<div class="container mt-2">
	<div class="card mx-auto">
		<div class="card-body" style="text-align: -webkit-left;">
			<div class="tab-content" id="nav-tabContent">
				<!-- Introduction Section-->
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-salesperson text-center">
								<span  class="text-danger"> <strong>365 days of wealth affirmation</strong> </span>
							</h2>
							<!-- Icon Divider-->
							{{-- <div class="divider-custom"> --}}
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								{{-- <img src="{{ asset('assets/img/The '.$title_image.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;"> --}}

								<!-- Collapsible section -->
								<div style="width: 100%;">
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
															<source src="{{ asset('assets/video/oto1_video.mov') }}" type="video/mp4">
															Your browser does not support the video tag.
														</video>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- End of collapse --}}
							</div>
							<!-- Section Content-->
						</div>
						<h3> Month of {{$fullMonthName}}</h3>
						<div class="container">
							<div class="row">
									@foreach($otos as $oto_item)
									<div class="col-12 col-md-6"> <!-- Use col-md-6 to display 2 cards in one line on medium-sized screens -->
											<div class="card text-center mb-4">
													<div class="card-body">
															<h5 class="card-title">Day {{ $oto_item->day }}</h5>
															<audio controls controlsList="nodownload" onplay="pauseOthers(this);">
																	<source src="{{ url('private/audios/'.$oto_item->file_name) }}" type="audio/mp3">
															</audio>
															<p class="card-text text-center" style="font-size: 15px">Description: {{$oto_item->description}}</p>
															<a href="{{ url('download-audio/'.$oto_item->file_name) }}" class="btn" style="width: 35%; font-size: 10px;">Download</a>
													</div>
											</div>
									</div>
									@endforeach
							</div>
									<br> <br> <br>
						</div>
						{{-- @foreach($otos as $oto_item)
						<div class="card text-center ms-3 mt-0 mb-3" style="width: 33rem;">
							<div class="card-body">
								<h5 class="card-title">Day {{ $oto_item->day }}</h5>
									<audio controls controlsList="nodownload" onplay="pauseOthers(this);">
										<source src="{{ url('private/audios/'.$oto_item->file_name) }}" type="audio/mp3">
									</audio>
								<p class="card-text" style="font-size: 15px">Description: {{$oto_item->description}}</p>
								<a href="{{ url('download-audio/'.$oto_item->file_name) }}" class="btn" style="width: 35%; font-size: 10px;">Download</a>
							</div>
						</div>
						@endforeach --}}
						
						{{-- <table class="table">
							<thead class="thead-dark">
								<tr>
								<th scope="col">Day #</th>
								<th scope="col">Title</th>
								<th scope="col">Audio</th>
								<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>I am wealthy beyond measure.</td>
									<td>
										<audio controls>
											<source src="{{ asset('assets/audio/Health_Well_Being.mp3')  }}" type="audio/mpeg">
										</audio>
									</td>
									<td>							
										<a class="btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="#">
											DOWNLOAD
										</a>
									</td>
								</tr>

								<tr>
									<th scope="row">2</th>
									<td>Money flows to me easily and abundantly.</td>
									<td>
										<audio controls>
											<source src="{{ asset('assets/audio/Health_Well_Being.mp3')  }}" type="audio/mpeg">
										</audio>
									</td>
									<td>							
										<a class="btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="#">
											DOWNLOAD
										</a>
									</td>
								</tr>

								<tr>
									<th scope="row">3</th>
									<td>I am a magnet for wealth and abundance.</td>
									<td>
										<audio controls>
											<source src="{{ asset('assets/audio/Health_Well_Being.mp3')  }}" type="audio/mpeg">
										</audio>
									</td>
									<td>							
										<a class="btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="#">
											DOWNLOAD
										</a>
									</td>
								</tr>
							</tbody>
							</table> --}}


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