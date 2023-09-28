{{-- Upgrade Content --}}
<div style="background-color: white;">
	<div class="container pt-2" style="background-color: white;">
		<h4 class="text-center mt-3">
			Want to Dive Deeper and Get More Guidance for Your Wealth Avatar?
			<br>
			We Have These Amazing Upgrades Crafted For You
		</h4>
      <div class="container-bg">
         <div class="row" style="border-radius: 8px;">
            <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
                  {{-- <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1> --}}
                  <h4 class="mt-2 me-2" style="color: white">Upgrade 1:</h4>
                  <img src="{{ asset('assets/img/oto1-hook-up.png') }}" alt="Navbar" class="img-fluid mt-4">
            </div>
            <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
                  <p class="mt-5 me-5" style="font-size: 16px; margin: 0; padding: 0; margin-left: 3rem; margin-right: 3rem;">A wealthier, more abundant you with the “Subconscious Reprogramming 1-Minute Series.” No longer will you be held back by self-limiting beliefs about money; instead, you’ll be empowered with a mindset that attracts wealth like a magnet. Take charge of your financial destiny with our transformative 1-minute audio sessions, designed to rewire your subconscious mind for financial success. As you immerse yourself in these powerful affirmations, watch as your income grows, opportunities multiply, and prosperity becomes your natural state. Supported by scientific research, our “Subconscious Reprogramming 1-Minute Series” is your key to manifesting a life of financial freedom and abundance. Don’t wait another moment to rewrite your financial story – seize the opportunity to create a prosperous future with the “Subconscious Reprogramming 1-Minute Series” today.</p>
                  <div class="float-end me-5 mb-2">
                        @if(!in_array(2, json_decode($user->access_level))) 
                           <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto1Modal">
							  Unlock Here
                           </button>
                        @else
                           <a class='btn-readmore' href="{{ url('/oto1') }}">Read More</a>
                        @endif
                  </div>
            </div>
            </div>
			<br>
         <div class="row">
            <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
                  {{-- <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1> --}}
                  <h4 class="mt-2 me-2" style="color: white">Upgrade 2:</h4>
                  <img src="{{ asset('assets/img/OTO-2.png') }}" alt="Navbar" class="img-fluid">
            </div>
            <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
                  {{-- <h3 class="mt-5 me-5" style="font-weight: bold; margin-left: 3rem;">CONTENT:</h3> --}}
                  <p class="mt-5 me-5" style="font-size: 16px; margin: 0; padding: 0; margin-left: 3rem; margin-right: 3rem;">Unlock the ultimate wealth secret with the “7-Minute Wealth Manifest” and unleash your financial success! This life-changing program empowers you to manifest wealth and prosperity in just seven minutes a day. Say farewell to financial worries and embrace the abundance that awaits you. Rapidly transform your financial reality and attract the money, success, and opportunities you deserve. Experience the miracle of this 7-minute ritual, elevating you from where you are to where you want to be. Whether you seek financial freedom, dream vacations, or the means to pursue your passions, the “7-Minute Wealth Manifest” has got you covered. Embrace this powerful tool and witness your financial dreams becoming a tangible reality. Take control of your financial destiny today and seize the secret to lasting wealth and abundance! We also included manifestations for good health and healthy relationships.</p>
                  <div class="float-end me-5 mb-2">
                        @if(!in_array(3, json_decode($user->access_level))) 
                           <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto2Modal">
							  Unlock Here
                           </button>
                        @else
                           <a class='btn-readmore' href="{{ url('/oto2') }}">Read More</a>
                        @endif
                  </div>
            </div>
            </div>
			<br>
         <div class="row">
            <div class="col-sm-3 text-center pt-5" style="background-color: #454332;"> 
                  {{-- <h1 class="mt-5 mb-5" style="color: #fff">Image Here</h1> --}}
                  <h4 class="mt-2 me-2" style="color: white">Upgrade 3:</h4>
                  <img src="{{ asset('assets/img/OTO-3.png') }}" alt="Navbar" class="img-fluid">
            </div>
            <div class="col-sm-9 p-1 pb-2" style="background-color: #6C6C5F; color: #fff; border: 4px solid #454332;"> 
                  {{-- <h3 class="mt-5 me-5" style="font-weight: bold; margin-left: 3rem;">CONTENT:</h3> --}}
                  <p class="mt-5 me-5" style="font-size: 16px; margin: 0; padding: 0; margin-left: 3rem; margin-right: 3rem;">Your path to financial transformation and abundance! Are you ready to reset your mind for wealth attraction? In just 21 days, you’ll undergo a complete mental shift, breaking free from scarcity thinking and embracing a mindset of prosperity. Through daily exercises, affirmations, and guided meditations, you’ll reprogram your subconscious mind for financial success. Watch as opportunities align with your new wealth consciousness, propelling you towards financial abundance and fulfilment. The “21-Day Mind Reset Challenge” is your opportunity to reboot your relationship with money and align yourself with the flow of abundance. Get ready to upgrade your wealth blueprint  and step into a life of financial freedom and prosperity by accepting the challenge today!</p>
                  <div class="float-end me-5 mb-2">
                        @if(!in_array(4, json_decode($user->access_level))) 
                           <button type="button" class="btn-readmore" data-toggle="modal" data-target="#oto3Modal">
							  Unlock Here
                           </button>
                        @else
                           <a class='btn-readmore' href="{{ url('/oto3') }}">Read More</a>
                        @endif
                  </div>
            </div>
         </div>
	</div>
</div>

<br> <br> <br> <br>