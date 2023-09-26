@extends('layouts.premium')
<style>
	.sub-card{
		border: 2px solid #423F32;
		margin: 20px 15px;
	}
	.content-wrapper {
		 display: flex;
		align-items: center;
		/* justify-content: center; 
		text-align: center; 
		height: 100%;  */
	}
	.content-wrapper img {
		margin-right: 10px; /* Add margin to create space between image and text */
		height: 3.5rem;
	}
</style>

@section('content')
<div style="background-color: #C1A460">
	<div class="container">
		<div class="row">
			 <div class="col-12 col-md-6">
					<p class="m-5 mb-1 text-center" style="font-family: Helvetica; color: white;">Claim your "members only" $10k/mo LIVE training <br>(Worth $497)</p>
					<div class="card" style="width: 90%; background-color: #D7C07C;">
							<div class="card-body sub-card">
									<h2 class="card-title text-center mt-0 mb-0 m-3" style="font-family: Garamond; font-size: 3.5rem;">Income Replacement Online Business for ALL Avatars <br> <span style="font-size: 2.5rem">(Make $300-$500/day) </span></h2>
									<a href="https://perpetualincome365.convertri.com/pre-registration/?affiliate=inetcom" target="_blank" class="btn-watch"><span style="color: #000000;">WATCH NOW</span></a>
							</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<p class="m-5 mb-1 text-center" style="font-family: Helvetica; color: white;">Click to download your content bonuses</p>
					<div class="d-flex justify-content-center">
						<div class="card" style="width: 70%; background-color: #F1EBE5;">
							<a href="{{ route('download', ['filename' => 'MoneyChakraSecrets.pdf']) }}" class="btn-click">
								{{-- <img src="{{ asset('assets/img/bonuses/Money Chakra.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
								<span style="color: #000000;">Money Chakra Secrets</span> --}}
								<div class="content-wrapper">
									<img src="{{ asset('assets/img/bonuses/Money Chakra.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
									<span style="color: #000000;">Money Chakra Secrets</span>
								</div>
							</a>
							<a href="{{ route('download', ['filename' => 'The Real Law Of Attraction Code - Training Guide.pdf']) }}" class="btn-click">
								<div class="content-wrapper">
									<img src="{{ asset('assets/img/bonuses/Real Law of Attraction.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
									<span style="color: #000000;">The Real Law of Attraction Code</span>
								</div>
							</a>
							<a href="{{ route('download', ['filename' => 'Mind Reset.pdf']) }}" class="btn-click">
								<div class="content-wrapper">
									<img src="{{ asset('assets/img/bonuses/Mind Reset.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
									<span style="color: #000000;">Mind Reset</span>
								</div>
							</a>
							<a href="{{ route('download', ['filename' => '30 Days of Motivation.pdf']) }}" class="btn-click">
								<div class="content-wrapper">
									<img src="{{ asset('assets/img/bonuses/30 Days of Motivation.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
									<span style="color: #000000;">30 Days of Motivation</span>
								</div>
							</a>
							<a href="{{ route('download', ['filename' => 'The Morning Ritual.pdf']) }}" class="btn-click">
								<div class="content-wrapper">
									<img src="{{ asset('assets/img/bonuses/Morning Ritual.png') }}" oncontextmenu="return false;" alt="Money Chakra Secrets" class="img-fluid">
									<span style="color: #000000;">The Morning Ritual</span>
								</div>
							</a>
							<a href="{{ route('download', ['filename' => 'OTO3 14-day wealth challenge.pdf']) }}" class="btn-click">
								<span style="color: #000000;">Recession Proof Profits</span>
							</a>
						</div>
					</div>
				</div>
		</div>
		<br> <br>
		<br> <br>
		<p class="text-center" style="font-family: Helvetica; color: white">you're not just receiving bonuses – you're receiving a toolkit to further help you transform your mindset, attract abundance, and embark on a journey of self-discovery and growth. Embrace the power of these bonuses and witness the positive ripple effects they bring to every aspect of your life.</p>
		<br> <br>
		<br> <br>
	</div>
</div>
@endsection