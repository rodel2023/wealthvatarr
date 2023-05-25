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
                  <img class="img-fluid" src="assets/img/wealth_avatarr.png">
               </div>
         </a>
         <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               Menu <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
               <li class="nav-item mx-0 mx-lg-1">
                  <!-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>FE</a> -->
                  <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/basic') }}">Basic</a>
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  <!-- <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>FE</a> -->
                  <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/premium') }}">FE</a>
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto1') }}">OTO - 1</a>
                  <!-- <a class="btn btn-secondary px-3 mb-2 mb-lg-0" href="http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4">OTO - 1</a> -->
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto2') }}">OTO - 2</a>
                  <!-- <a class="btn btn-secondary px-3 mb-2 mb-lg-0" href="http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4">OTO - 1</a> -->
               </li>
               <li class="nav-item mx-0 mx-lg-1">
                  <a class='btn btn-secondary px-3 mb-2 mb-lg-0' href="{{ url('/oto3') }}">OTO - 3</a>
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
               <h2 class="mt-5">Unlock Your Sacred Archetypal Powers & Experience Abundance Across All Aspects Of Your Life.</h2>

               <div class="{{$avatar}}-img">
                  <img src="{{ asset('assets/img/image') }}/{{$avatarmiddle}}" width="80px">
               </div>
               <div class="title-form mt-5 mb-4"><h4>This Exclusive Reading Is Specially Prepared For:</h4></div>
               <h2 class="sub-header-{{$avatar}} text-center"><strong>{{$user->name}} </strong></h2>

               <div class="container d-flex align-items-center flex-column">
                  <img width="400px" src="{{ asset('/assets/img/avatars') }}/{{$image}}" alt="..." />
                  <h2 class="sub-header-{{$avatar}} text-center">
                     {{$title}}
                  </h2>
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

   <div class="row my-row" style="padding-top: 1rem;">
      <div class="card mx-auto" style="width: 60rem;">
         <div class="card-body" style="text-align: -webkit-left;">
         <div class="row">
            <div class="col-12">
               <h2 class="sub-header-salesperson text-center">
                  INTRODUCING:  WealthAvatarr™ Premium Bundle
               </h2>
               <img class="w-100" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1649301462/WealthAvatarr/wealth_bundle22_a5dcqo.png">
               <p>
                  The ultimate package to take your wealth to the next level.
               </p>
               <h2 class="sub-header-salesperson text-center">
                  COMPONENT #1: Wealth Archetype Frequencies
               </h2>
               <p>
                  <strong>Here’s What You Get.</strong>
               </p>
               <p>
                  We make unlocking your wealth-getting potential easy for you.
               </p>
               <p>
                  All you need to do is listen to <strong><i>these magical audios 3-minutes a day.</i></strong>
               </p>
               <p>
                  By just wearing headphones, activate those dormant genes to create a Midas Touch.
               </p>
               <p>
                  And start flourishing.
               </p>
               <p>
                  Now here’s something crucial.
               </p>
               <h2 class="sub-header-salesperson text-center">
                  Your Vibration Needs to Match Your Specific Archetype As Well.
               </h2>
               <p>
                  In a Forbes Article, renowned High Vibration entrepreneurial coach Taryn Lee states: “Each of us has a unique set of codes, a unique set of success frequencies. Unlocking them is simply a process of trusting your instincts, prioritising the health of your energy and tapping into your inner guide to follow the direction of your dreams’.
               </p>
               <p>
                  Simply put, the frequencies that unleash your manifestation potential is SPECIFICALLY tailored to you.
               </p>
               <p>
                  It’s like the radio. One decimal point off and the audio quality drops.
               </p>
               <p>
                  That’s why we not only created audios to help you break through the Genetic Glass Ceiling, we TAILORED it to your wealth archetype.
               </p>
               <p>
                  Every beep. Every boop. Every click. Every melody... Is customised to your type.
               </p>
               <p>
                  Giving the the greatest chance of breaking through and living the life of your dreams.
               </p>
               <p>
                  Now, you possess a superior genetic advantage.
               </p>
               <p>
                  Well, on to the next part.
               </p>
               <h2 class="sub-header-salesperson text-center">
                  COMPONENT #2: Premium Archetype Analysis
               </h2>
               <p>
                  <strong>INTRODUCING: YOUR PREMIUM ARCHETYPAL ANALYSIS - THE GATEWAY TO ARCHETYPAL INTEGRATION</strong>
               </p>
               <p>
                  Once you shatter the Genetic Glass Ceiling, you still need to know what to do with all that freedom.
               </p>
               <p>
                  After all, nature abhors a vacuum, and you need to fill that open mind with the juiciest money-making secrets in the galaxy.
               </p>
               <p>
                  Again, we’re giving you an Archetype Analysis that’s SPECIALLY for you.
               </p>
               <p>
                  There’s 5 phases to knowing your archetype. This report outlines each of these steps.
               </p>
               <h2 class="sub-header-salesperson text-center">
                  Already, These are Results That Our Community Have Achieved
               </h2>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“This path to success is slowly unveiling itself in front of me...I mean, everything is making sense now!”</h3>
                  <p>I never knew I've been doing something wrong in my life, until my wealth archetype reading specifically pointed out this certain unconscious thing that's draining me day by day! I never really intended to purchase the whole package because hey it's just the same as every other quiz on the internet.But I'm telling you now - this one surprisingly made an exact reading of my personality when they sent me the free version. 
                     (If you think your free reading eerily matches something about you, that's a good start!)
                     And the paid version takes things to a whole new level!
                     I've never come across such a very specific reading that takes into consideration all my fears and priorities in life, then aligns them all towards my own path to success.
                     This path to success is slowly unveiling itself in front of me...I mean, everything is making sense now! The reading itself provided the step-by-step process!
                     My life has taken a complete 180 degrees turn after I took the premium offer and understood everything about my wealth archetype. I don't know what kind of sorcery the team has for this one, but after just two months of using their tailored resources, I got a 1.5x pay raise at work and now my life is 100% clearer than before! 
                     </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650463138/WealthAvatarr/karlina-g9a655c5dc_1920-modified_vy28fm.png">
                     <p>
                        Elizabeth Thomas, 42 <br>
                        Founder & Owner of Thomas Consultancy <br>
                        Wealth Archetype: Capitalist
                     </p>
                  </div>
               </div>

               <div class="testimonial">
                  <span class="archetype-sm ruler"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“This wealth archetype reading will INTERPRET your own fate for you!”</h3>
                  <p>
                     Perhaps, the best thing I've ever done this year so far is to avail the comprehensive version of this wealth archetype profile.

                     Other readings on the internet and fortune-teller wanna-bes will give you poetic and metaphorical results. 

                     But this wealth archetype reading will INTERPRET your own fate for you! 

                     They even have a clear goal you should follow if you want that next bunch of dollars in your account. (Which makes sense in every angle you look at!) 

                     Wealth breakthroughs are something that you start on your own, on your free will. However, you need something to push you to start that. This archetype reading has certainly done its part to compel me to take my first step towards my own breakthrough.

                     Challenges still come now and then but the reading also made me realize the stuff I need to weave my way through these problems with the effective formula the reading provided just for me.

                     This is the first time I listened to the wealth archetype beats (that's included in your comprehensive package) and boy it works every single time I listen to it. The instructions are clear on how to effectively use them - in just 3 weeks of listening, I attracted the biggest deal in my company till date!

                     This is an answered prayer. I personally reached out and thank the creator for sending me this through email!
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650463138/WealthAvatarr/happy-g7f49962e2_1920-modified_uo1cjb.png">
                     <p>
                        Adam Sanchez, 28<br>
                        Information systems specialist<br>
                        Wealth Archetype: Banker

                     </p>
                  </div>
               </div>
               <p>
                  I want you to know that attracting wealth <strong>IS</strong> possible. It shouldn’t be tough at all, but effortless!
               </p>
               <p>
                  What I’m about to share with you are the exact resources, guides and steps that have helped thousands of people, including Adam and Elizabeth, unlock wealth beyond their wildest dreams!
               </p>
               <p>
                  You’ll be getting…
               </p>
               <p>
                  <i class="fa-solid fa-check" style="color: green"></i>
                  Our commissioned <i>3-minute a day</i> genetic-altering magic audio tracks tailored to your archetype to start ‘magnetizing wealth’ immediately</li>
               </p>
               <p>
                  <i class="fa-solid fa-check" style="color: green"></i>
                  A premium in-depth archetype guide that reveals the exact steps to take for a REAL breakthrough in your wealth and finance based on your archetype
               </p>
               <p>
                  <i class="fa-solid fa-check" style="color: green"></i>
                  Effortless re-alignment of your wealth frequencies back to your abundance to start attracting wealth beyond imagination with proven science and results
               </p>
               <p>
                  <i class="fa-solid fa-check" style="color: green"></i>
                  Flip the ‘genetic wealth switch’ on and unlock a massive unfair advantage in wealth creation over your peers
               </p>
               <p>
                  <i class="fa-solid fa-check" style="color: green"></i>
                  Shortcut your wealth journey and start experiencing the difference as soon as today
               </p>
               
               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src="{{ asset('assets/img/image/analysis.png') }}" class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650458576/WealthAvatarr/guarantee_te70wq.png">
                        <img class="payment-options" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650460803/WealthAvatarr/payment-options_rwriot.png">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>
               
               <p>
                  Fair warning - if you close this page, your discount will be gone forever. 
               </p>
               <p>
                  The next time you see this, you will be paying the full official price for the same thing. Why pay more when you don’t have to? 
               </p>
               <p> 
                  If you act now, you are getting it at the LOWEST possible price… This is the BEST time to get in!
               </p>
               <h2 class="sub-header-salesperson text-center">
                  If You Act Now, You’ll Get These Exclusive Bonuses…
               </h2>
               <p>
                  <strong>Here Are the Bonuses </strong>
               </p>
               <p>
                  The more you read this, the more convinced this bundle is the best investment for you. 
               </p>
               <p>
                  Now, to sweeten the honeypot, if you claim your WealthAvatarr™ Premium Bundle today, you get exclusive access to these bonuses (Worth $295).
               </p>
               <p>
                  These 5 extra bonus resources are specially hand-picked by our sound engineers and experts to maximize your wealth attraction potential, backed by proven science.
               </p>
               <p>
                  They are NOT any resources or information that you can get anywhere else, but only from this page IF you act now.
               </p>
               <p class="text-center">
                  <strong>BONUS #1: Money Chakra Secrets - $67 value</strong>
               </p>
               <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652240718/WealthAvatarr/moneychakra_gfbyer.jpg" width="200" style="margin: 0 auto; align-items: center; display: flex;">
               <p>
                  Money Chakra Secrets is a simple yet highly impactful guide that will teach you chakra balancing techniques so you'll be able to heal your chakras into perfect alignment and attract wealth and abundance into your life.
               </p>
               <p>
                  Balancing your chakras will lessen the negative impact of physical and emotional stressors to your life. With these techniques and rituals that you can do for at least 20 minutes in a day, your potential to invite wealth and abundance of energy into your daily life. 
               </p>
               <p class="text-center">
                  <strong>BONUS #2: The Real Law Of Attraction Code - $67 value</strong>
               </p>
               <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652241037/WealthAvatarr/reallaw_ph6g67.jpg" width="200" style="margin: 0 auto; align-items: center; display: flex;">
               <p>
                  Many people have heard about the Law of Attraction, but few people know how to use it properly. A lot of people think that it is some kind of magic because they have heard stories about people wishing for things to happen and then they did. It is not magic, but it is very powerful and with this ebook you will learn exactly how to use it.
               </p>
               <p>
                  Celebrities and big time entrepreneurs of today can attest that the law of attraction works. However, not a lot of people know how to manifest it the right way. The law also involves science to invite positive results on your way.  
               </p>
               <p class="text-center">
                  <strong>BONUS #3: Mind Reset - $67 value</strong>
               </p>
               <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652241171/WealthAvatarr/mindreset_fnewxk.jpg" width="200" style="margin: 0 auto; align-items: center; display: flex;">
               <p>
                  With this ebook you will discover how to reset your mind so you can eliminate self-limiting beliefs and have greater clarity and focus in your professional and personal life.

               </p>
               <p>
                  To make the wealth archetype work for you right away, especially the wealth archetype beats, you need to eliminate the self-limiting beliefs that your mind has grown accustomed to. The law of attraction will never work for you, unless you know exactly which thoughts you should be eliminating from your head. 
               </p>
               <p class="text-center">
                  <strong>BONUS #4: The 30 Days Of Motivation - $47 value </strong>
               </p>
               <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652241172/WealthAvatarr/30daysmotivation_ysewju.jpg" width="200" style="margin: 0 auto; align-items: center; display: flex;">
               <p>
                  Daily positive affirmations to get you motivated every single day!.
               </p>
               <p>
                  Still feel like you could use a little brain kick to get you motivated? Research studies reveal that reading positive affirmations will activate your brain’s reward system instantly. These affirmations will lessen the negative effects of unavoidable stressors to your brain and emotions.
               </p>
               <p class="text-center">
                  <strong>BONUS #5: The Morning Ritual - $47 value </strong>
               </p>
               <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652241181/WealthAvatarr/morningritual_mp1vjg.jpg" width="300" style="margin: 0 auto; align-items: center; display: flex;">
               <p>
                  With this guide, you can create a morning routine that enhances your productivity, energy, and happiness throughout the day.
               </p>
               <p>
                  A billionaire’s secret of keeping his or her wealth is to start the day right. A proper morning routine will help you keep awake to focus on the small and important details of your day-to-day activities. Chances are high that you will attract the right opportunities when you start your day right.
               </p>
               <p>
                  You get all this for a total of only $37 one time.
               </p>
               
               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src="{{ asset('assets/img/image/analysis.png') }}" class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650458576/WealthAvatarr/guarantee_te70wq.png">
                        <img class="payment-options" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650460803/WealthAvatarr/payment-options_rwriot.png">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <h2 class="sub-header-salesperson text-center">
                  The “Miracle Headphones” Guarantee
               </h2>
               <p>
                  <strong><i>The Ultimate Iron-Clad Agreement that If You Don’t Achieve Near-Instant Results By Simply Listening to the Audios, We Don’t Deserve to Take Your Money – no tricks, loopholes or funny business.</i></strong>
               </p>
               <p>
                  In case you’re skeptical, I’m offering...
               </p>
               <p>
                  Here’s how it works…
               </p>
               <img src= "https://res.cloudinary.com/dohqthrfv/image/upload/v1649299854/WealthAvatarr/listen_i42j38.png" class="img-intext" alt="" >
               <p>
                  Get your copy of the WealthAvatarr™ Premium Bundle today.
               </p>
               <p>
                  Put on those headphones...
               </p>
               <p>
                  Listen to the audios -- unlocking your genetic potential.
               </p>
               
               <p>
                  See immediate manifestation.
               </p>
               <p>
                  Soar and be free.
               </p>
               <p>
                  Draw a line in the sand, because now you’re attracting so many amazing things. You’re almost like a Hoover for blessings.
               </p>
               <p>
                  And as you complete the audios…
               </p>
               <p>
                  You’ll be dazzled by the results.
               </p>
               <p>
                  Congratulations…
               </p>
               <h2 class="sub-header-salesperson text-center">
                  You Fulfilled Your Wealth Archetype.
               </h2>
               <p>
                  if you don’t do a double take because you can’t believe your eyes…
               </p>
               <p>
                  Or if, for any reason, you aren’t 100% satisfied with your results…
               </p>
               <p>
                  …simply give us a call and we’ll give you back every penny, no questions asked.
               </p>
               <p>
                  Up to 60 days.
               </p>
               <p>
                  …if your life hasn’t changed, we don’t want your money.
               </p>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“I will be forever grateful for the people behind this wealth avatar”</h3>
                  <p>I’m a real estate specialist and I am a living proof that this reading made me go beyond my sales quota for this month! 

                     It’s the first time for me and I will be forever grateful for the people behind this wealth avatar. I’m not sure if someone behind this system is coaching me real time indeed. The guidelines that the reading provided me matches my personality accurately, without disregarding my insecurities. 

                     In turn, this reading taught me how to grasp my client’s personalities, too. I’ve never been this good at connecting with clients very well. 

                     This reading made me realize that I need to utilize my strengths. But you won’t do that without knowing what they are in the first place. The formula the reading gave me became my day-to-day mantra to push myself to become the better version of myself. 

                     I purchased the add-on bonus ‘Morning Ritual’ on top of this wealth avatar comprehensive reading. One client commented how I manage to get so lively no matter what the time is. 

                     I’m keeping this on my phone from now on! 
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333996/WealthAvatarr/man1_dsblv4.png">
                     <p>
                        Jeffrey H., 35 <br>
                        Real Estate Specialist <br>
                        Wealth Archetype: Giver 
                     </p>
                  </div>
               </div>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“You will know EXACTLY how you can get through all the challenges that life throws at you. Definitely life-changing!”</h3>
                  <p>
                     First time I was commended by my boss for a rush project well done just this week. Done by simply reminding myself the pieces of advice this WealthAvatarr™ premium  report imparted to me. 

                     This comprehensive reading was very accurate in pointing out what my weakness is, and what EXACTLY I need to do to rectify it! I guess that’s what sets this one apart from all the boring personality quizzes and coaches out there. 

                     This will not only make your bank and your pockets wealthier. Expect to get coached about making yourself happier emotionally, acquainting with the right people, and strengthening your relationships with your friends and loved ones. 

                     Mind you, this will not solve all your problems at once but reading through the pages of my comprehensive reading, you will know EXACTLY how you can get through all the challenges that life throws at you. Definitely life-changing!
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333996/WealthAvatarr/man3_bwsdef.png">
                     <p>
                        Dmitry Yakovlev, 30 <br>
                        Project manager, (company confidential) <br>
                        Wealth Archetype: Sales person
                     </p>
                  </div>
               </div>
               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src="{{ asset('assets/img/image/analysis.png') }}" class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650458576/WealthAvatarr/guarantee_te70wq.png">
                        <img class="payment-options" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650460803/WealthAvatarr/payment-options_rwriot.png">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <h2 class="sub-header-salesperson text-center">
                  So on the bad days that make you cry “if only…”
               </h2>
               <p>
                  If you end up looking back… 
               </p>
               <img src= "https://res.cloudinary.com/dohqthrfv/image/upload/v1649299539/WealthAvatarr/struggle_c4s8aq.png" class="img-intext" alt="" >
               <p>
                  Regretting that you made bad choices.
               </p>
               <p>
                  Beating yourself up because you of course could see it coming.
               </p>
               <p>
                  I gently urge you.
               </p>
               <p>
                  Please stop.
               </p>
               <p>
                  Just a few years back, when I was battered and bruised.
               </p>
               <p>
                  Yet the setback was gearing for a comeback.
               </p>
               <p>
                  Because here’s the best news of all…
               </p>
               <h2 class="sub-header-salesperson text-center">
                  Wealth Archetype Miracle redeems your past, while giving you a breathtaking future to look forward to!
               </h2>
               <p>
                  Click on the button that says “Add to Cart” to claim your discounted price now!
               </p>
               <p>
                  Remember: it’s not just a great bargain you’re getting today...
               </p>
               <p>
                  You’ll be joining in on the biggest Wealth Archetype movement in history...
               </p>
               <p>
                  All you need to do is click on the button.
               </p>
               <p>
                  Then fill in your details.
               </p>
               <p>
                  Click on the button that says “Add to Cart” to claim your discounted price now!
               </p>

               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src="{{ asset('assets/img/image/analysis.png') }}" class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650458576/WealthAvatarr/guarantee_te70wq.png">
                        <img class="payment-options" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650460803/WealthAvatarr/payment-options_rwriot.png">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>


               <p>
                  This is one of those watershed moments in your life. Three paths lie before you:
               </p>
               
               <h2 class="sub-header-salesperson text-center">
                  1) You Can Bury Your Head in the Sand
               </h2>
               <p>
                  Look, let me level with you.
               </p>
               <p>
                  You’ll know deep down that the job you hate isn’t magically going to transform into the gig of your dreams. That marriage is not going to fix itself. The money issues are not just going away.
               </p>
               <p>
                  So if you were intent on making a change, why not plunge in now?
               </p>
               <p>
                  With the “Miracle Headphones” Guarantee, what do you have to lose?
               </p>
               <p>
                  Alternatively…
               </p>
               <h2 class="sub-header-salesperson text-center">
                  2) You Can Try to Figure All This Out On Your Own
               </h2>
               <p>
                  Really…
               </p>
               <p>
                  Just Google “wealth creation” and you’ll get a FLOOD of information.
               </p>
               <p>
                  In fact, you could literally drown in all that conflicting advice.
               </p>
               <p>
                  And remember what I said about all the other methods?
               </p>
               <p>
                  If it’s man-made, it has limited capability for change. If it taps into nature, your reality will change instantly.
               </p>
               <p>
                  On the flip side….
               </p>
               <p>
                  This is where…
               </p>
               <h2 class="sub-header-salesperson text-center">
                  3) You Can FINALLY Take Control of Your Life!
               </h2>
               <p>
                  Look… you’ve already experienced what trouble feels like. The turmoil... The storms of life.
               </p>
               <p>
                  You’ve been there… you somewhat survived.
               </p>
               <p>
                  But, it’s time to try something different.
               </p>
               <p>
                  <strong>Now’s The Time To Say “YES…”</strong>
               </p>
               <p>
                  “YES” to the amazing gifts just waiting for you to claim and bring into your reality.
               </p>
               <p>
                  We’re here on this planet to experience love, joy, and abundance, and now you can experience it all… just by clicking “play.”
               </p>
               <p>
                  In just a matter of minutes, the miracle tune will start working its magic and you can finally start attracting wealth specific to your archetype.
               </p>
               <p>
                  Once again, let’s take a look at everything you’re about to receive:
               </p>
               <ul class="tick-list">
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Your Personalized WealthAvatarr™ Premium Analysis - <span>$197 value</span></strong></li>
                  <p class="indent">This premium in-depth archetype guide reveals the exact steps to take for a REAL breakthrough in your wealth and finance based on your archetype. Shortcut your wealth journey and start experiencing the difference as soon as today!</p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Our Commissioned <em>3-Minute</em> A Day Miracle-Wealth Audio - <span>$147 value</span></strong></li>
                  <p class="indent">Plug in right away into our commissioned 3-minute a day genetic-altering magic audio tracks tailored to your archetype to start ‘magnetizing wealth’ immediately. Experience effortless re-alignment of your wealth frequencies back to your abundance state to start attracting wealth beyond imagination!</p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Bonus #1: Money Chakra Secrets - <span>$67 value</span></strong></li>
                  <p class="indent">Money Chakra Secrets is a simple yet highly impactful guide that will teach you chakra balancing techniques so you'll be able to heal your chakras into perfect alignment and attract wealth and abundance into your life. </p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Bonus #2: The Real Law Of Attraction Code - <span>$67 value</span></strong></li>
                  <p class="indent">Celebrities and big time entrepreneurs of today can attest that the law of attraction works. However, not a lot of people know how to manifest it the right way. A lot of people think that it is some kind of magic because they have heard stories about people wishing for things to happen and then they did. It is not magic, but it is very powerful and with this ebook you will learn exactly how to use it.</p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Bonus #3: Mind Reset - <span>$47 value</span></strong></li>
                  <p class="indent">To make the wealth archetype work for you right away, especially the wealth archetype beats, you need to eliminate the self-limiting beliefs that your mind has grown accustomed to. The law of attraction will never work for you, unless you know exactly which thoughts you should be eliminating from your head. </p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Bonus #4: The 30 Days Of Motivation - <span>$47 value</span></strong></li>
                  <p class="indent">Still feel like you could use a little brain kick to get you motivated? Research studies reveal that reading positive affirmations will activate your brain’s reward system instantly. These affirmations will lessen the negative effects of unavoidable stressors to your brain and emotions.</p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Bonus #5: The Morning Ritual - <span>$47 value</span></strong></li>
                  <p class="indent">A billionaire’s secret of keeping his or her wealth is to start the day right. A proper morning routine will help you keep awake to focus on the small and important details of your day-to-day activities. You will attract the right opportunities and people when you start your day right.</p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>Priority White-Glove Support - <span>$97/ month value</span></strong></li>
                  <p class="indent">Our team of archetypal experts and sound-engineers are there to support you through your journey. You will never be left alone without support. This VIP treatment is ONLY available if you sign up <a>on this page.</a></p>
                  <li><strong><i class="fa-solid fa-check mt-2"></i>60 Days “Miracle Headphone” Guarantee - <span>Priceless</span></strong></li>
                  <p class="indent">The Ultimate Iron-Clad agreement that if you don’t experience transformative results, we don’t deserve your money – no tricks, loopholes or funny business.</p>
                  <li><strong>Total value of everything you’re getting today: <span>$997 In Value</span></strong></li>
               </ul>
               <p class="text-center">
                  <strong>If you take action now, you’ll get ALL of this for <u>only $37.</u></strong>
               </p>
               <p class="text-center">
                  Get started right away by clicking on the button below and start attracting wealth <strong>NOW!</strong>
               </p>
               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src="{{ asset('assets/img/image/analysis.png') }}" class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650458576/WealthAvatarr/guarantee_te70wq.png">
                        <img class="payment-options" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1650460803/WealthAvatarr/payment-options_rwriot.png">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <p>
                  All you desire is already out there. The universe with its boundless delights are in your grasp.
               </p>
               <p>
                  But, it can’t come into your life, until you’ve taken that first step for a brand new you.
               </p>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“I got a sudden influx of orders and new customers for my new shop!”</h3>
                  <p>
                     I never knew I had this millionaire potential in me until this reading pointed it out!
                     I’m a business startup and I can say that this avatar brought my very first good luck. My first niche was not working and way below my expectations but thanks to this package I was able to see where the problem was! 
                     Sometimes, it’s not just courage that you need to get out of what you thought would be your breakthrough. It’s courage paired with motivation and the right guidance that will bring you to where you will flourish. This reading is that guidance that will lead you to the outcome you’ve been expecting all along. In fact, it’s even better than what you think. 
                     After heeding the advice and implementing it for a week, I got a sudden influx of orders and new customers for my new shop! I think it was the wealth archetype beats (this one comes with the reading) and the add-on bonus guide that made it all possible. 
                     I also availed of the Mind Reset secret from the add-ons. I read it before immersing myself with the wealth-archetype beats that come with the comprehensive reading. It works like magic! I woke up with a renewed sense of energy and purpose since then. 
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333998/WealthAvatarr/woman2_jvnzrv.png">
                     <p>
                        Carolina Strait, 28<br>
                        Proud start-up owner at the age of 28<br>
                        Wealth archetype: Sales person 

                     </p>
                  </div>
               </div>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“Will I recommend it? 100% YES.”</h3>
                  <dl>
                     <dt>What I like about the trending wealth avatar: </dt>
                     <dd>- It tells you about your wealth profile (Are you the spending type? The materialistic person? Or the boss kind?) </dd>
                     <dd>- Your wealth profile is connected with your strength. The reading will guide you how to bank on these strengths of yours.</dd>
                     <dd>- The reading will tell you how to manage and rectify these weaknesses of yours. What makes this special is that it will not tell you general what-to-dos. The reading is very specific. Trust me on this one.</dd>
                     <dd>- The wealth archetype beats work wonders!!! I never once felt groggy anymore after this. </dd>
                     <dd>- The archetype beats are for FREE</dd>
                     <dd>- The added bonus SOLOPRENEUR SUCCESS motivated me to finally start my dream business. I’m now on Day 5 of planning :)</dd>
                  </dl>
                  <p>
                     Does the wealth avatar work? DEFINITELY. I feel more energetic in the office, my confidence levels kicking in every day, and my dream business is taking shape. 
                     Will I recommend it? 100% YES. The add-on bonuses feature is also worth it!

                  </p>
                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333995/WealthAvatarr/woman1_hdbzyl.png">
                     <p>
                        Sally P., 30 <br>
                        Executive assistant to the CEO <br>
                        Wealth archetype: Giver
                     </p>
                  </div>
               </div>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“…like there was a real human coach behind that tells her exactly what to do with her life.”</h3>
                  <p>
                     I have never found an online quiz that will tell everything I need to know about me until this! 

                     I was surprised by the reason behind my materialistic tendencies. All those articles about taming yourself to stop spending are futile if you don’t address the root cause of these tendencies.

                     This reading speaks to me on so many levels. There’s a lot to work on myself or I would drain myself while working hard for that million-dollar bank account dream. 

                     I was skeptical about the wealth archetype beats at first but after only four days of listening, I started to see small significant progress in my confidence and decision-making skills. I am excited to see where it will take me after a month of listening. 

                     I just recommended this to my sister and she, too, was amazed how specific the reading is, like there was a real human coach behind that tells her exactly what to do with her life. 

                     This get’s my highest recommendation!
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333995/WealthAvatarr/woman6_yyecnu.png">
                     <p>
                        Michella Azar, 29 <br>
                        Junior Architect<br>
                        Wealth archetype: Influencer

                     </p>
                  </div>
               </div>
               
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“The formula to make me content and happy, emotionally and financially.”</h3>
                  <p>
                     I’m one of those people who are going through a midlife crisis. 

                     I was just scrolling through my emails when I came across this online reading. I was so bored so I gave it a try and purchased the comprehensive package.

                     I can say that it was the turning point of my year because the wealth avatar gave me the courage to try something new! I was overwhelmed by the accuracy of my strengths and weaknesses, and how convincing the reading sounds of what I’m missing from my life. 
                  </p>
                  <dl>
                     <dt>So basically, the wealth avatar provided me the following: </dt>
                     <dd>- What I need to do to earn more money, based on my personality and on what I’m comfortable with. </dd>
                     <dd>- What I have to do to find genuine relationships which I badly need right now.</dd>
                     <dd>- The formula to make me content and happy, emotionally and financially. </dd>
                     <dd>- Suggestions to make your life more exciting and more enjoyable</dd>
                     </dl>
                     <p>
                        I’m SO GLAD I returned and purchased the premium reading and the add-on bonuses!
                     </p>
                     
                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652334221/WealthAvatarr/woman7_nszyos.png">
                     <p>
                        Chonna Sy, 36 <br>
                        Firm Accountant <br>
                        Wealth archetype: Banker
                     </p>
                  </div>
               </div>
               <div class="testimonial">
                  <span class="archetype-sm creator"></span>
                  <div class="testimonial-header">
                     <img class="logo-img" src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652166691/WealthAvatarr/Wealth_Avatarr_grltle.png">
                  </div>
                  <h3>“The financial problems I thought would be with me forever now seem like an easy thing to resolve… You won’t regret it…”</h3>
                  <p>
                     For people who are looking to reset their mind, gain a new perspective, and see themselves from another point of view - this wealth avatar is for you!

                     I got three things after the avatar assessment: a higher level of confidence to deal with people, a comprehensive guideline to make me richer in a year based on my profile, and a set of mind-boost tracks that works every time you listen to it. 

                     The reading interacts with me like a person is typing behind in real-time. I was assessed on my weaknesses that are dragging me down and the strengths that I am taking for granted. 

                     The reading taught me to capitalize on these strengths and what I should do to let go of my insecurities. 

                     The financial problems I thought would be with me forever now seem like an easy thing to resolve. Who would have thought that I would only need an accurate guideline like this one to help me solve my problems?

                     I read this one on a weekend and like the reviews I’ve been reading about this, the wealth archetype beats gave me that energy kick that no caffeine did before!
                  
                     You won’t regret it!
                  </p>

                  <div class="testimonial-profile">
                     <img src="https://res.cloudinary.com/dohqthrfv/image/upload/v1652333996/WealthAvatarr/woman5_qpfsqh.png">
                     <p>
                        Mary S., 41 <br>
                        Business Consulting Agency Founder <br>
                        Wealth archetype: Banker


                     </p>
                  </div>
               </div>
                  
               <div class="paav2-cta">
                  <div class="row second-row">
                     <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                        <img src='https://res.cloudinary.com/dohqthrfv/image/upload/v1650461121/WealthAvatarr/analysis_mlr6ic.png' class='paav2-cover'>
                     </div>
                     <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                        <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>
            
                        <a class='yes cta-btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><span class='btn-text'>Add to Cart</span> <i class='fas fa-arrow-right'></i></a>
                                    <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'>Click Here To Gain Instant Access</a>
                        <img class="cta-guarantee" src="{{ asset('assets/img/image/guarantee.png') }}">
                        <img class="payment-options" src="{{ asset('assets/img/image/payment-options.png') }}">
                        <div class="security">
                           <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <p>
                  It will take you to our secure reservation page, where you can manifest the most magnificent life in just 3 clicks.
               </p>
               <p>
                  This is only going to be offered for a limited time, so please don’t delay…
               </p>
               <p>
                  Click on the bright orange button below now. I’ll see you on the other side.
               </p>

               <div class="container vwo-cta">
                  <div class="row">
                     <div class="col-sm-12">
                        <img class="img-mw600" src="{{ asset('assets/img/image/analysis.png') }}">
         
                        <a href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=sj&email=101successhacks@gmail.com&cbexit=194&vtid=reading-v4'><img src="{{ asset('assets/img/image/pricing.png') }}" class='img-mw600'></a>
                     </div>
                     <input type="hidden" name="" value="individualogist.com/offer/paa/reading-v4/?name=sj&email=101successhacks%40gmail.com&archetype=caregiver">
                     <input type="hidden" name="" value="reading-v4">
                  </div>
               </div>
               
            </div>
            
         </div>

      </div>
      </div>
   </div>

      <div id="footer">
        <div class="footer-logo">
        
            <img class="img-fluid" src="{{ asset('assets/img/image/wealth_avatarr.png') }}">
        </div>
    
        <!--<p class="small"><a href="http://individualogist.com">Home</a> | <a href="http://individualogist.com/terms-and-conditions">Terms and Conditions</a> | <a href="http://individualogist.com/privacy-policy">Privacy Policy</a> | <a href="https://individualogist.kayako.com">Support</a> | <a href="http://individualogist.com/contact">Contact</a></p>-->
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2022 wealthavatarr.com. All Rights Reserved</p>
    
      </div>

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
