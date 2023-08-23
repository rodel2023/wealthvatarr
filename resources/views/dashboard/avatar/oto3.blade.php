@extends('layouts.oto')

@section('content')
<div class="mt-2 pt-2" style="background-color: #FDF9F0; border-radius: 8px;">
	<div class="row">
    <div class="col text-center">
      <div class="d-flex justify-content-center">
				<!-- Collapsible section -->
				<div style="width: 70%;">
					<div class="accordion" id="collapsibleSection">
						<div class="accordion-item" style="background-color: #726950">
							<!-- Collapsible Header -->
							<h2 class="accordion-header" id="sectionHeader">
								<button class="accordion-button @if(!request('collapse')) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent" style="background-color: #726950;">
									<div style="font-size: 20px; color: white; margin-left: 30%;">
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
											<source src="{{ asset('assets/video/oto3_video.mov') }}" type="video/mp4">
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
    </div>
  </div>
	<div class="text-center p-2">
		<h2>Welcome to the 14-Day Mind-Reset Challenge for Wealth Building!</h2>
		<div class="container" style="padding: 0 4rem;">
			<p>This challenge is designed to help you transform your mindset around money and create a solid foundation for building wealth. Each day, you will be given a task or exercise to complete that will help you develop positive habits, cultivate abundance, and shift your thinking towards financial success. Are you ready? Let's begin!  </p>
		</div>
	</div>
	<hr>
	<div class="row">
    <div class="col-md-8">
			<div class="m-5 mt-1">
				<h2>Day 1: Define Your Vision </h2>
				<p>Take some time to envision your ideal financial future. What does wealth mean to you? Write down your vision in detail, including the lifestyle you desire, the financial goals you want to achieve, and how you want to contribute to the world with your wealth.</p>
			</div>
		</div>
    <div class="col-md-4">
			<div class="image-container position-relative">
					<img src="{{ asset('assets/img/oto/oto3-d1.png') }}"  oncontextmenu="return false;" alt="oto3-d1" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 25%;">
					<div class="download-button">
							<a href="{{ asset('assets/img/oto/oto3-d1.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 40%;">
								 Download
							</a>
					</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
    <div class="col-md-6">
			<div class="m-5 mt-1">
				<h2>Day 2: Assess Your Current Beliefs  </h2>
				<p>Reflect on your current beliefs about money. Are there any limiting beliefs or negative associations you have with wealth? Write them down and challenge their validity. Replace negative beliefs with positive affirmations about money and abundance.  </p>
			</div>
		</div>
    <div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d2-p1.png') }}"  oncontextmenu="return false;" alt="oto3-d2" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d2-p1.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										 Download part 1
									</a>
							</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d2-p2.png') }}"  oncontextmenu="return false;" alt="oto3-d2" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d2-p2.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										Download part 2
									</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
    <div class="col-md-6">
			<div class="m-5 mt-1">
				<h2>Day 3: Gratitude for Current Wealth </h2>
				<p>Practice gratitude by making a list of all the financial blessings you currently have. It could be a stable job, a supportive network, or even small luxuries in your life. Appreciating what you have now will help attract more abundance into your life.  </p>
			</div>
		</div>
    <div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d3-p1.png') }}"  oncontextmenu="return false;" alt="oto3-d3" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d3-p1.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										 Download part 1
									</a>
							</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d3-p2.png') }}"  oncontextmenu="return false;" alt="oto3-d3" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d3-p2.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										Download part 2
									</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
    <div class="col-md-6">
			<div class="m-5 mt-1">
				<h2> Day 4: Educate Yourself </h2>
				<p>Spend time today learning about personal finance, wealth-building strategies, and investment opportunities. Read books, listen to podcasts, or take online courses to expand your knowledge in these areas. The more you know, the better equipped you'll be to make informed financial decisions.  </p>
			</div>
		</div>
    <div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d4-p1.png') }}"  oncontextmenu="return false;" alt="oto3-d4" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d4-p1.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										 Download part 1
									</a>
							</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d4-p2.png') }}"  oncontextmenu="return false;" alt="oto3-d4" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d4-p2.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										Download part 2
									</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	{{-- Missing day 5 and 6 --}}
	<div class="row">
    <div class="col-md-8">
			<div class="m-5 mt-1">
				<h2>Day 7: Surround Yourself with Positive Influences </h2>
				<p>Evaluate the people you spend the most time with. Are they supportive of your financial goals? Seek out individuals who have a healthy relationship with money, share similar aspirations, and can inspire and motivate you on your wealth-building journey.</p>
			</div>
		</div>
    <div class="col-md-4">
			<div class="image-container position-relative">
					<img src="{{ asset('assets/img/oto/oto3-d7.png') }}"  oncontextmenu="return false;" alt="oto3-d7" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 25%;">
					<div class="download-button">
							<a href="{{ asset('assets/img/oto/oto3-d7.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 40%;">
								 Download
							</a>
					</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
    <div class="col-md-6">
			<div class="m-5 mt-1">
				<h2>Day 8: Overcome Fear of Failure </h2>
				<p>Identify any fears or limiting beliefs that are holding you back from taking calculated risks. Challenge these fears and remind yourself that failure is a stepping stone to success. Embrace failure as an opportunity to learn and grow.  </p>
			</div>
		</div>
    <div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d8-p1.png') }}"  oncontextmenu="return false;" alt="oto3-d8" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d8-p1.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										 Download part 1
									</a>
							</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image-container position-relative">
							<img src="{{ asset('assets/img/oto/oto3-d8-p2.png') }}"  oncontextmenu="return false;" alt="oto3-d8" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 17%;">
							<div class="download-button">
									<a href="{{ asset('assets/img/oto/oto3-d8-p2.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 50%;">
										Download part 2
									</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="row">
    <div class="col-md-8">
			<div class="m-5 mt-1">
				<h2>Day 9: Celebrate Milestones </h2>
				<p>Acknowledge and celebrate the progress you've made so far. Take a moment to appreciate how far you've come on your wealth-building journey. Rewarding yourself for achieving milestones will boost your motivation and reinforce positive habits.  </p>
			</div>
		</div>
    <div class="col-md-4">
			<div class="image-container position-relative">
					<img src="{{ asset('assets/img/oto/oto3-d9.png') }}"  oncontextmenu="return false;" alt="oto3-d9" class="img-fluid rounded custom-image" style="height: 350px; margin-left: 25%;">
					<div class="download-button">
							<a href="{{ asset('assets/img/oto/oto3-d9.png') }}" download class="btn-oto3-download btn-download" style="font-size: 12px; width: 40%;">
								 Download
							</a>
					</div>
			</div>
		</div>
	</div>
	<br>
</div>
<script>
	const videoPlayer = document.getElementById('videoPlayer');
	
	// When the collapsible section is hidden (closed), stop the video
	document.getElementById('collapsibleSection').addEventListener('hidden.bs.collapse', function () {
		videoPlayer.pause();
	});
</script>

@endsection