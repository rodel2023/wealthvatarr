@extends('layouts.oto')

@section('content')
<div class="container">
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
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/The '.$title_image.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
						</div>
						<h3> Month of {{$fullMonthName}}</h3>
						@foreach($otos as $oto_item)
						<div class="card text-center ms-3 mt-0 mb-3" style="width: 33rem;">
							<div class="card-body">
								<h5 class="card-title">Day {{ $oto_item->day }}</h5>
									<audio controls onplay="pauseOthers(this);">
										{{-- <source src="{{ $oto_item->file_location.$oto_item->file_name}}" type="audio/mpeg"> --}}
										<source src="{{ url('private/audios/'.$oto_item->file_name) }}" type="audio/mp3">
									</audio>
								<p class="card-text" style="font-size: 15px">Description: {{$oto_item->description}}</p>
								{{-- <a href="{{ route('oto1s.download', ['filename' => $oto_item->file_name]) }}" class="btn btn-primary" style="width: 35%; font-size: 10px;">Download</a> --}}
								<a href="{{ url('download-audio/'.$oto_item->file_name) }}" class="btn btn-primary" style="width: 35%; font-size: 10px;">Download</a>
							</div>
						</div>
						@endforeach
						
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
@endsection