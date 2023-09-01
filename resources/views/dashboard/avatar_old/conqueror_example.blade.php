@extends('layouts.main')

@section('content')
<!-- Navigation-->
<nav class="navbar navbar-expand-sm bg-secondary text-uppercase fixed-top" id="mainNav">
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
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#introduction">introduction</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#superpowers">superpowers</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#weaknesses">weaknesses</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#challenges">challenges</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#wealth_formula">wealth_formula</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#wealth_guide">wealth_guide</a></li>
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
<!-- Masthead-->
<header class="masthead bg-info text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/avatars/Capitalist.png" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Conquerer</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">YOUR COMPREHENSIVE GUIDE TO WEALTH CREATION </p>
    </div>
</header>

<!-- Introduction Section-->
<section class="page-section" id="introduction">
    <div class="container">
        <!-- Introduction Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">WHAT MAKES YOU THE <span  class="text-danger"> <strong>CONQUEROR</strong> </span> </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Introduction Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5">
                <!-- <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." />
                </div> -->
                <p class="par"> The Conqueror loves big and risky assets. They play the get-rich-quick game no matter how big
                    the involved money is. Just like a rebel, a Conqueror loves challenging the norms by their
                    creative ideas. They have their own ways of doing things and they love the track that‟s not being
                    used by many.</p>
                <p class="par">     They are the best person to ask about financial complexities. Numbers are their friends, but
                    sometimes, a Conqueror bravely takes on a challenge even without enough data and backup
                    plan. When they win, they win big. But when they lose, they lose a lot.
                    You have your own set of approaches and practices when it comes to risk-taking and creativity.
                    This attitude is what makes you unstoppable from pursuing the things you want.
                    In short, you believe that your long-term goals can be easily achieved by taking the road less
                    traveled. 
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SUPERPOWERS Section-->
<section class="page-section bg-primary text-white mb-0" id="superpowers">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">A <span  class="text-danger"> <strong>CONQUEROR'S</strong> </span> SUPERPOWERS</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Superpower's Section Content-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5 par">
            <p><u><strong>Why do I need to identify my superpowers and strengths?</strong></u></p>
            <p>Good question. Let‟s start with knowing the importance of superpowers and strengths. First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist extreme weather and endure stress. These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations. Research further concluded that these skills and abilities can still be further developed according to one‟s limits.</p>

            <p><br />
            <strong>The same goes to one‟s inner traits.</strong></p>
            <p> One‟s superpowers are said to be the easiest ones to develop further &ndash; and these developedsuperpowers would be your fastest way to grow your wealth and cultivate a success mindset. As THE CONQUEROR, here are the superpowers which you can focus on to build your first wealth base:</p>

            <p><br />
            <strong>Your Risk-Taking Attitude Keeps You On Track</strong></p>
            <p>A Conqueror usually has his long-term and short-term goals completely and clearly laid out in front of him &ndash; and this is the reason why he takes on every challenge no matter how risky it may get. Your favorite line is similar to &ldquo;Let‟s see what happens&rdquo; because your own way of getting the things you want is different from the norms. You place the highest bets on the unconventional ways of building your wealth. This is so that when you win, you know you will win big time and that‟s equivalent to one goal slashed as achieved from your bucketlist.</p>

            <p><br />
            <strong>You Never Quit</strong></p>
            <p>A Conqueror is always on experimental mode. They are constantly looking for new ways to earn and generative passive income. They may quit a strategy, but their creative and risk-taking mind will just constantly look for another way to compensate the loss in that particular strategy. Quitting is the last option, because on the mind of a conqueror, the world has never-ending ideas. They always aspire to see their ideas come to life and take the responsibility of doing so.</p>

            <br /><p><strong>You Are Fond Of Developing Cutting Edge Ideas</strong></p>
            <p>A Conqueror is a great unconventional entrepreneur, because they always make sure that their offers appeal to the consumers. They develop products and services with the thought in mind that this is going to be the next big thing. Conquerors Understand Financial Complexities They know how others play the money game. They never miss a cent from their financial statements. They are very well-versed with numbers that they know how to play with it. That‟s why they invest in risky and expensive investments &ndash; such as acquiring big assets &ndash; because they know the return can double and triple in the next few years.</p>

            <p><br />
            <strong>Responsible Gambler</strong></p>
            <p> A Conqueror is a lone figure. This may be a downside because he only works as a one-man team, however, this makes him a responsible person when it comes to mistakes and other liabilities.</p>
            </div>
        </div>

    </div>
</section>

<!-- WEAKNESSES Section-->
<section class="page-section" id="weaknesses">
    <div class="container">
        <!-- Introduction Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">A <span  class="text-danger"> <strong>CONQUEROR'S</strong> </span> WEAKNESSES </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Introduction Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5 par">
              <p><strong>You Find It Hard To Trust People</strong><br /><br />
              A Conqueror does not really feel comfortable when they entrust a big project or a big deadline to people other than themselves. Their trust issues might have been rooted from their childhood or past relationship and friendship betrayals which led them to their fall.</p>

              <p>Conquerors cannot delegate significant work, because of this fear of sabotage. Besides, you think that your own creative ways can bring the best results and only you could do it the way you wanted it to be.</p>

              <p><br />
              <strong>Conquerors Rarely Have A Backup Plan</strong><br /><br />
              Conquerors have in mind that they will never fail, hence, they take every risk they know of. However, practicality and today‟s uncertainty necessitate the need for a backup plan. When the pandemic kicks in, a lot of thriving businesses were forced to shut down without hint of return. Managers and executives were forced to look for other jobs, media personalities and celebrities started looking for better jobs somewhere. Even the rich are asking their financial managers and advisors of the best thing to do when their investment plummets as the economy is constantly falling.</p>

              <p>If a you are someone who bet a huge stake on something in danger getting dissipated because of this unforeseen event which are claiming lives and livelihoods, then chances are high that you are one of the most uncomfortable people every time the Government imposes new regulations invoking their police power for public safety.</p>

              <p><br />
              <strong>They Gamble Even Their Whole Financial Security</strong><br /><br />
              Conquerors purchase risky big assets to take control. A Conqueror with no backup plan gambles his or her whole financial stability. A risky appetite, paired with willingness to gamble everything is a very dangerous venture that anyone should be wary of.</p>

              <p>Take for example the story of Patricia Kluge.</p>

              <p>After getting a high-settlement divorce from a wealthy husband, Kluge invested so much of her money by opening a winery and investing into real estate. When the housing market crashed, she lost everything she invested. The bank foreclosed her winery and subdivision. She battled these cases with attorneys around the world to try and save her business ventures. She ended up filing bankruptcy and auctioning off her jewelry and luxurious assets.</p>

              <p><br />
              <strong>Conquerors Live For The Approval Of Others</strong><br /><br />
              Conquerors are also said ask others for other‟s approval. They love to give attention to money because it makes them stand out from the crowd. A conqueror strives to make a name for him or herself. They want people to see that their method of dealing with things are superior than that of the conventional standards.</p>

            </div>
        </div>
    </div>
</section>

<!-- CHALLENGES Section-->
<section class="page-section bg-primary text-white mb-0" id="challenges">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">WEALTH CHALLENGES FOR A <span  class="text-danger"> <strong>CONQUEROR</strong> </span> </h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Superpower's Section Content-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5 par">
              <p class="text-danger">A risk-taking attitude, complete with a sufficient backup plan is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.</p>
              <p><br />
              <strong>Let's start.</strong></p>
              <ol>
                <li><strong>Disconnected And Untested Systems May Not Be A Good Start</strong></li>
                <li><strong>Your Method Of Doing Things May Not be Efficient Enough</strong></li>
                <li><strong>You Put A Lot Of Money In Investment, And Leave Almost Nothing For Your&nbsp;Savings And Emergency Fund</strong></li>
                <li><strong>You Are Very Hard To Be Satisfied With The Good Things Around You</strong></li>
              </ol>

              <p><strong>Venturing In Something That You Have No Adequate Knowledge About Is A Surefire Way To Fail</strong></p>
              <p>If the get-rich-quick schemes work, everybody should have been rich already. Entrusting your money just because a system &bdquo;seems to work to many‟ without any knowledge how it works or what is involved is a surefire way to lose money. Venturing in a business about a niche which you know nothing about is a surefire way to lose your hard earned investment. Nowadays, People Without A Backup Plan Suffers At The Onset Of The Unforeseen Event Imagine if you are a business without a contingency plan when the pandemic started and the State imposed lockdowns in your area. If your business never thought of shifting to an online platform right away, then chances are high that you‟d be forced to shut down the business. Your time, effort, and money are wasted because of lack of a&nbsp; plan should the worst case scenario comes.</p>

              <p><br />
              <strong>Gambling Even Your Savings Will Be Your Hardest Downfall</strong></p>
              <p>When it comes to budgeting, the golden rule is to put 50% to necessary monthly expenses, 30% to investment, and 20% to savings. Your emergency, retirement, and savings funds should be secured so that when the worst thing happens to your 30%, the 20% will be enough to start again.</p>

              <p><br />
              <strong>Being Satisfied In Life Is A Matter Of Perspective</strong></p>
              <p>The Conqueror lives for the future. The problem is, the future is uncertain. What is certain is today. Look at the things around you, aren‟t they the exact things you once wished when you were a kid?</p>
              <p>Being contented in the present does not mean that a person will never thrive to reach his/her dreams and goals in the future. Contentment means being happy and grateful with what you have today. These are your wishes from the past. These are products of your hardwork.</p>

            </div>
        </div>

    </div>
</section>


<!-- WEALTH FORMULA Section-->
<section class="page-section" id="wealth_formula">
    <div class="container">
        <!-- Introduction Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">A <span  class="text-danger"> <strong>CONQUEROR'S</strong> </span> WEALTH FORMULA </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Introduction Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5 par">
              <p><u><strong>These problems can impact your wealth generation potential. Why is that so?</strong></u></p>
              <p><br />

              <strong>Start From The Tried And Tested Systems That You&rsquo;re Already Accustomed To</strong></p>
              <p>
              Grant Cordone, an international sales expert and speaker who now owns multi-million dollar real estate, shared that building your first wealth should come from something that you‟re already familiar with. His video guy started expanding his advertising job to those connected to Cordone and that he did not &ldquo;start a doughnut shop&rdquo; to get multiple streams of income. Cordone calls this symbiotic flows and warned that adding disconnected flows may not work in providing you with better wealth.</p>

              <p><br />
              <strong>Building Wealth Is A Team Effort</strong></p>
              <p> No person became rich without a team backing him or her up. Microsoft was founded by Bill Gates and his childhood friend Paul Allen. In 1976, Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne. Mark Zuckerberg was helped by his classmates in creating and launching FaceMash &ndash; which would later on become Facebook.</p>
              <p>Don‟t be mistaken that a team means a group of professionals working together towards one goal. That is one definition. But remember that you have your very own team at home &ndash; your spouse, parents, siblings, best friends, and trusted relatives. In fact, a team player does not have much qualifications. As long as you are working together in unity and with one goal, you are already considered a team.</p>
              <p>Building wealth is rarely a one-man job. Even if you‟re only investing, you would need financial planners and managers or a stockbroker to trade. Both of you are considered a team with a single goal &ndash; to multiply your money.</p>
              <p>Each people is gifted with a unique sets of gifts &ndash; a set of talents which will eventually fit in your path to success.</p>
              <p>Business- and organization-wise, proper delegation is one of the skills of a good leader. He knows who trust with confidential matters, who would be the best person to do a certain task, and who would be the one who would bring significant and innovative results to the team. Team effort is a work in itself.</p>

              <p style="text-align: center;"><br /><strong>This is your power motivation formula in building your wealth as a Conqueror:</strong></p>
              <p style="text-align: center;">Symbiotic Flows + Partnerships + Backup Plan</p>
              <p style="text-align: center;"> And For Your Ultimate Secret to Wealth-Generation:</p>
              <p style="text-align: center;">Investing In Symbiotic Flows, Long-Term Investments, And Financial Coaching</p>

            </div>
        </div>
    </div>
</section>

<!-- WEALTH GUIDE Section-->
<section class="page-section bg-primary text-white mb-0" id="wealth_guide">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">A <span  class="text-danger"> <strong>CONQUEROR'S</strong> </span> WEALTH GUIDE</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Superpower's Section Content-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-12 col-lg-12 mb-5 par">
              <p>It‟s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Conqueror would eventually encounter in this lifetime.</p>
              <p>Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.</p>
              <p>These fears are reasonable. You want to build wealth in the shortest possible time. You want towatch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.</p>
              <p>However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. It‟s possible that these wants not take up your savings funds, for you can let your money do the work for you.</p>
              <p>Here are the solutions catered just for a Conqueror like you:</p>
              
              <p><br /><strong>#1 Enlist The Help Of A Finance Coach / Financial Advisor</strong></p>
              <p><br />Financial coaches aim to help their clients get clear about their financial goals, habits, and money appetite. They teach people how to be responsible with their money and fix their financial practices. An advisor, on the other hand, will recommend investment according to your risk appetite, long-term goals, and amount of money you‟re willing to gamble. A financial professional is not only for the wealthy people &ndash; these professionals cater to small businesses and those with day job who are looking to start or diversify their investment portfolio.</p>
              <p>Wealth management and investment involves risks. Specific investment strategies and the amount to be involved depends particularly on the client. This is a case-to-case basis. Financial advisors provide their clients with individual plans to cater to their needs and specific goals.</p>
              <p>Whether it be a question on the best thing to do with your money just sitting in a bank, an advice about a particular investment, or a help in budgeting a big expensive event such as wedding and birthdays, a financial coach or advisor can provide you the best options to consider.</p>
              <p>Where to find financial coaches / advisors?</p>
              <ul>
                <li>Referrals will be your best option if you have friends or colleagues who have tried their</li>
                <li>service.</li>
                <li>Most financial advisors are affiliated with insurance companies.</li>
                <li>National Association of Personal Financial Advisors (NAPFA) website</li>
                <li>Accredited Financial Counselor website</li>
              </ul>
              <p>Alternative: <strong>Start Subscribing To Financial Newsletters And Listening To Financial Podcasts</strong></p>
              <p>Financial podcasts are one of the top podcast niche nowadays. Most people, even the younger generations, are worried of their financial security this pandemic. A finance professional advice may be something that they cannot afford yet, so they resort to financial podcasts to get particular advice from.</p>

              <p><br /><strong>#2 When You Are Able To Take It To The Next Level, Invest In Long-Term Ones</strong><br /><br />
              Long-term investments are those where you let your money stay for a long time to generate cash after a certain number of years. Do this when you are ready to part with some of your money and put it in an income-generating fund to leave it there for maximum returns.</p>
              <p>Why Long-Term Investments?</p>
              <ul>
                <li>Less time-consuming. You won‟t need to be bothered by the fluctuations of the value of the asset.</li>
                <li>Higher returns of investment.</li>
              </ul>

              <p>What Are The Best Long-Term Investments?</p>
              <ul>
                <li>Stocks</li>
                <li>Corporate and Treasury Bonds</li>
                <li>Mutual Funds</li>
              </ul>

              <p><br />Where To Avail?</p>
              <p>Mutual Funds are offered by banks as well. As your local bank about their own investment fund managed by experts that are expected to yield huge returns after sometime. The good thing about this is that you don‟t need to learn the in-depths of stock trading because the experts will handle it for you. Unit Investment Trust or mutual funds managed by some retail banks require a&nbsp; minimum investment of $500.</p>
              <p>There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.</p>
              <p><br /><strong>#3 Start A Connected Side Hustle</strong><br /><br />
              Here are the best low-cost side hustles for a Conqueror to fit on his or her expertise:</p>
              <ul>
                <li><strong>Sell online courses (Minimum $50 per course)</strong></li>
                <li><strong>Writing and content creation services (Minimum $10 per article for web content)</strong></li>
                <li><strong>Blogger / Affiliate Marketer ($200/month for a beginner)</strong></li>
              </ul>
            </div>
        </div>

    </div>
</section>
