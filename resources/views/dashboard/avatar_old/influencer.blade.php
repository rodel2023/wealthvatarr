@extends('layouts.premium')

@section('content')

	<div class="card mx-auto">
		<div class="card-body" style="text-align: -webkit-left;">
			<div class="tab-content" id="nav-tabContent">
				<!-- Introduction Section-->
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-influencer text-center">
								WHAT MAKES YOU THE <span  class="text-danger"> <strong>INFLUENCER</strong> </span>
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							<p>The Influencers love to stand out from the crowd and they never fail to do such. They make the best first impressions because of their charm and the things they own. They bring radiance to any room they are in and they are always oozing with confidence wherever they may be. No wonder a lot of people are astonished with an influencer.</p>

							<p>An Influencer attracts people and experiences. They view money as the source of every good thing in life. They work to buy the things they want and regard these expensive stuff as a source of power, authority, and good impressions.</p>

							<p>In short, an influencer earning capacity is motivated by his or her desire to stand out and buy luxury.</p>

						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab1-next" >
							Show Me My Superpowers...
						</a>
					</div>
				</div>
				<!-- SUPERPOWERS Section-->
				<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-superpowers-tab">
					<div class="row">	
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-influencer text-center">
								A <span  class="text-danger"> <strong>INFLUENCER'S</strong> </span> SUPERPOWERS							
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							
							<h2 class="sub-header-influencer text-center">
							Why do I need to identify my superpowers and strengths?
							</h2>

							<p>Good question. Let&rsquo;s start with knowing the importance of superpowers and strengths.</p>

							<p>First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist extreme weather and endure stress. These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations.</p>

							<p>Research further concluded that these skills and abilities can still be further developed according to one&rsquo;s limits.</p>

							<p>The same goes to one&rsquo;s inner traits.</p>

							<p>One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.</p>

							<p><strong>As THE INFLUENCER, here are the superpowers which you can focus on to build your first wealth base:</strong></p>

							<h2 class="sub-header-influencer text-center">
							You Always Ooze With Self-Confidence
							</h2>

							<p>In fact, you never know that your radiance and high confidence can be contagious that it can influence people to follow suit. An Influencer believes in his/her abilities to take the center stage. They make a grand entrance effortlessly. They believe that their skills are enough to be showcased around and they always carry their blings which significantly can add to&nbsp; their radiance and shine.</p>

							<h2 class="sub-header-influencer text-center">
							You Attract People And Opportunities
							</h2>

							<p>People know you are one in a kind. Thanks to your cheerful personality and the things you own which screams class and grace, people trust that you can do a job easily. Paired with a high self- esteem, an Influencer is one of the best team players to attract opportunities for the whole group.</p>

							<h2 class="sub-header-influencer text-center">
							Influencers Appreciate Opportunities
							</h2>

							<p>They may not make opportunities but influencers never let them pass once a door has been opened for them. It&rsquo;s a great way to bring in wealth so why have second thoughts? An influencer understands that not everyone gets the same opportunity which makes them appreciate it even more. They take actions when it comes to wealth generation.</p>

							<h2 class="sub-header-influencer text-center">
							Influencers Are Very Good Speakers
							</h2>

							<p style="margin-left:7px; margin-right:9px; text-align:justify">Influencers make it easy when it comes to public interaction. They have the best public relations skills. Influencers have the ability to persuade someone by their charm and speaking skills. It adds to their executive image.</p>

							<h2 class="sub-header-influencer text-center">
							Your Generosity Brings You To The Center Stage, Too
							</h2>

							<p>An Influencer helps in a way that can bring them to the center of attention, too. They never fail to ask how you&rsquo;ve been or ask for anything that they can help you with.</p>
						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab2-next">
							Show Me My Weaknesses!
						</a>
					</div>
				</div>
				<!-- WEAKNESSES Section-->
				<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-weaknesses-tab">
					<div class="row">
						<div class="col-12">
							<!-- Section Heading-->
							<h2 class="sub-header-influencer text-center">
								A <span  class="text-danger"> <strong>INFLUENCER'S</strong> </span> WEAKNESSES
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>
							<!-- Section Content-->
							<h2 class="sub-header-influencer text-center">
							Your Desire To Spend Compulsively Is Unstoppable
							</h2>

							<p>It doesn&rsquo;t matter whether a certain item is on sale or not, as long as the Influencer desires it, it is considered sold. It is compulsive because these items are usually not necessary to live. They fall under wants and not under necessities. An Influencer has their own criteria on what to buy impulsively &ndash; as it is usually the expensive ones and useful in such a way that it can elevate his or her status, figure, and authority.</p>
							<p><strong>These are the usual signs that point out you are a compulsive spender:</strong></p>
							<ul>
								<li>Your shopping expenses for wants take up a significant portion from your monthly income.</li>
								<li>You go into debt because of it</li>
								<li>You hide your extravagant purchases from family members and loved ones</li>
								<li>You rarely use these purchases</li>
								<li>Your New Year&rsquo;s Resolution always include limiting your impulse purchases</li>
								<li>You&rsquo;re energetic and in the mood when it comes to shopping, online or not.</li>
								<li>When you&rsquo;re sad and lonely, you feel that shopping can alleviate your feelings and your coping mechanism from stress.</li>
							</ul>

							<h2 class="sub-header-influencer text-center">
							You Cling Onto Your Unhappy Childhood
							</h2>

							<p>An Influencer&rsquo;s materialism is a result of his or her unhappy childhood experiences. They found solace in the things they own now as a working adult, to compensate with the fact that their&nbsp; past is not that satisfying. Expensive stuff are usually the things that mask their sadness and insecurities from the past.</p>

							<h2 class="sub-header-influencer text-center">
							You Are Obsessed With Insecurities
							</h2>

							<p>No one is ever happy about their own insecurities but an influencer is oftentimes highly insecure about his or her own. They tend to mask it with the things they can buy and own. Their excessive positivity, sometimes, is only a front to mask your emotional baggage. You rarely say that there&rsquo;s something wrong even in front of your best of friends for fear that you&rsquo;d get judgment and reveal your insecurities and ugly past to them.</p>
						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab3-next">
							Show Me My WEALTH CHALLENGES!
						</a>
					</div>
					
				</div>
				<!-- CHALLENGES Section-->
				<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="nav-challenges-tab">
					<div class="row">	
						<div class="col-12">
							<h2 class="sub-header-influencer text-center">
								WEALTH CHALLENGES FOR A <span  class="text-danger"> <strong>INFLUENCER</strong> </span> 						
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>

							<!-- Section Content-->
							<p>A radiant image and genuine high self-confidence, with the right motivation and true appreciation of the result is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.</p>

							<p>Let&rsquo;s start.</p>

							<ol>
								<li><strong>Your Efforts May Not Enough To Keep Your Lifestyle</strong></li>
								<li><strong>You Are Far From Achieving Genuine Happiness</strong></li>
								<li><strong>Your Desire For Status And Power Will You Even More Uncomfortable</strong></li>
								<li><strong>You Have Troubles Building Genuine Relationships With Family, Friends, And Acquaintances</strong></li>
							</ol>

							<h2 class="sub-header-influencer text-center">
							When Your Extravagant Purchases Are Not Matched With Your Earning Capacity, You Won&rsquo;t Achieve Financial Happiness And Independence
							</h2>

							<p>It&rsquo;s not uncommon to see a person with an Influencer archetype living with someone who can share some of their expenses. An Influencer&rsquo;s earning capability today may not be enough to fund the lifestyle that he or she is living in right now. This fact makes them far from being debt- free.</p>

							<p>An Influencer&rsquo;s desire for fame, status, and authority through extravagant purchases is a surefire way not to achieve financial happiness and independence early. Many aspire to achieve this kind of happiness and independence while they are still young and able to enjoy the things in life. This is one of the challenges for you as an influencer, for you are the type that invests in things</p>

							<h2 class="sub-header-influencer text-center">
							Genuine Happiness Comes Not Only From Material Things
							</h2>

							<p>Now, your happiness comes only from the material things you own. This kind of happiness is temporary, only to fill the void and compensate for the intense feelings which make you impulse buy the things you desire. A psychologist Tim Kasser told American Psychological Association in 2014 that according to his research, materialism will lead to an unhappier life eventually.</p>

							<p>The research further concluded that the more materialistic a person is, the more likely he is going to experience unpleasant emotions, the more physical health problems they experience, and the less they feel happy emotions than those who are less materialistic.</p>
						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab4-next">
							Show Me My WEALTH FORMULA!
						</a>
					</div>
				</div>

				<!-- WEALTH FORMULA Section-->
				<div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="nav-wealth_formula-tab">
					<div class="row">	
						<div class="col-12">
							<h2 class="sub-header-influencer text-center">
								A <span  class="text-danger"> <strong>INFLUENCER'S</strong> </span> WEALTH FORMULA 						
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>

							<!-- Section Content-->
							<p><strong><u>These problems can impact your wealth generation potential. Why is that so?</u></strong></p>

							<h2 class="sub-header-influencer text-center">
							Happiness Is A Great Motivation To Wealth Generation.
							</h2>

							<p>In a <a href="http://sonjalyubomirsky.com/wp-content/themes/sonjalyubomirsky/papers/BLinpressb.pdf">study </a>by Julia Boehm &amp; Sonja Lyubomirsky of the University of California, it was shown that contrary to the perception of many, happiness precedes success. It may sound contrary, especially if happiness is associated with money. However, it is also shown in different studies that happiness is associated with the income level. Sometimes, spending a little bit for our wants can become a big motivation which can result to better wealth generation.</p>

							<h2 class="sub-header-influencer text-center">
							Your Saving Habits Will Jumpstart Your Wealth Generation Capabilities
							</h2>

							<p>Great investments are a result of hard work paired with a risk-taking attitude. The best time to invest for a faster and higher return of investment in the near future is to invest as soon as you start earning an income. If a person keeps on spending and reasoning out that they deserve it, nothing will be left for them to invest. The things that they really deserve in the future will remain far-fetched. Investments need money to run. In wealth generation, you need the money to work for you.</p>

							<h2 class="sub-header-influencer text-center">
							Science Says That Conscientious People Are Most Likely To Get Rich
							</h2>

							<p>A <a href="https://bpspsychub.onlinelibrary.wiley.com/doi/abs/10.1111/bjop.12360">2018 study </a>from the British Journal of Psychology concludes that focus on what they need to do instead on what they want to do. If you are focusing to buy stuff that you need because it signifies power and therefore, makes you happy, then you are more likely to be inferior in terms of your wealth-generating capacity. People who are planning how to earn more money, get promotions, and think of ways to make theirselves sellable are the people who will earn more than double in only a matter of years from now.</p>

							<p>&nbsp;</p>

							<h2 style="text-align:center"><strong>This is your power motivation formula in building your wealth as a Salesperson: </strong></h2>

							<h2  class = "text-danger" style="text-align:center"><strong>Self + Perspective</strong></h2>

							<p>&nbsp;</p>

							<p class = "text-danger" style="text-align:center"><strong>And For Your Ultimate Secret to Wealth-Generation: </span></strong></p>

							<p class = "text-danger" style="text-align:center"><strong>Finding Your Passion To Start Your Own Business</span></strong></p>
						</div>
						<a class="btn button-go-up" href="#nav-tab" id="tab5-next">
							Show Me My WEALTH GUIDE!
						</a>
					</div>
				</div>
				<!-- WEALTH GUIDE Section-->
				<div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="nav-wealth_guide-tab">
					<div class="row">
						<div class="col-12">
							<h2 class="sub-header-influencer text-center">
								A <span  class="text-danger"> <strong>INFLUENCER'S</strong> </span> WEALTH GUIDE
							</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								{{-- <div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div> --}}
								<img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Navbar" style="height: 100px; margin-top: 1rem;">
							</div>
							<!--Section Content-->
							<p>It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Influencer would eventually encounter in this lifetime.</p>

							<p>Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.</p>

							<p>These fears are reasonable. You want to build wealth in the shortest possible time. You want to watch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.</p>

							<p>However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.</p>

							<p><strong>Here are the solutions catered just for a Influencer like you:</strong></p>

							<h2 class="sub-header-influencer text-center">
							#1 Enlist The Help Of A Life Coach
							</h2>

							<p>One thing that this wealth personality reading wants you to do is to get your life back. Your ugly childhood memories and hurtful past are still controlling you today that you are letting your emotions decide for you. You may be grabbing the best opportunities right away, but the results of these opportunities will be put into waste if you don&rsquo;t spend it wisely.</p>

							<p>Contrary to the belief of many, a life coach is not similar to psychologist. Don&rsquo;t be afraid to get judged because you are working with one. Wealthy personalities and celebrities have their own life coaches to guide their goals and principles in life. Oprah Winfrey credits her life coach to her success. Leonardo DiCaprio enlisted the help of a life coach and his current status and achievements in life speak for themselves how successful life coaching is for him. Bill Clinton, Serena Williams, and Hugh Jackman are some of the famous personalities who are very vocal that they have discovered their own path to success thanks to their life coaches.</p>

							<p>A life coach will tackle about your specific obstacles, what&rsquo;s taking you back from making progress, and will clarify your goals to work on to. Even your compulsive spending will be addressed. These are the specific job responsibilities of a life coach:</p>

							<ul>
								<li>Help you attain work/life balance</li>
								<li>Address your fears and help eliminate them</li>
								<li>Teach you how to build stronger relationships</li>
								<li>Enhance your creativity</li>
								<li>Realign your long-term goals</li>
								<li>Improve communication skills</li>
								<li>Manage your time effectively</li>
								<li>Create specific goals to achieve your dreams</li>
							</ul>

							<p style="margin-left:7px; margin-right:21px; text-align:justify">Consider a life coach as someone who drags you out of bed every morning. Most people need assistance and an authoritative figure to change bad habits and stick to their plan. A life coach can act as one to help you jumpstart your wealth generation journey.</p>

							<h2 class="sub-header-influencer text-center">
							#2 Invest In Long-Term Investments
							</h2>

							<p>This is perfect for an Influencer. Find investments which will require you not to withdraw your money for a certain number of years. Consider this as a very good practice to curb your compulsive spending tendencies. Every time you earn money, put at least 20% of it to a long- term investment fund.</p>

							<p><strong>Why Long-Term Investments?</strong></p>

							<ul>
								<li>Less time-consuming. You won&rsquo;t need to be bothered by the fluctuations of the value of the asset.</li>
								<li>Higher returns of investment.</li>
							</ul>

							<p><strong>What Are The Best Long-Term Investments?</strong></p>

							<ul>
								<li>Stocks</li>
								<li>Corporate and Treasury Bonds</li>
								<li>Mutual Funds Where To Avail?</li>
							</ul>

							<p>Mutual Funds are offered by banks as well. As your local bank about their own investment fund managed by experts that are expected to yield huge returns after sometime. The good thing about this is that you don&rsquo;t need to learn the in-depths of stock trading because the experts will handle it for you. Unit Investment Trust or mutual funds managed by some retail banks require a minimum investment of $500.</p>

							<p>There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.</p>

							<h2 class="sub-header-influencer text-center">
							#3: Start A Business
							</h2>

							<p>Inc.com published a <a href="https://www.inc.com/jeff-haden/how-science-says-people-who-get-rich-are-different-from-everyone-else.html">report </a>noting some interesting facts about &quot;The 400 Individual Tax Returns Reporting the Largest Adjusted Gross Incomes&rdquo; by the IRS. Interestingly, this is how the top 400 taxpayers earned their income for that year:</p>

							<p><strong>Wages and salaries: 4.47 percent Interest: 4.24 percent</strong></p>

							<p><strong>Dividends: 10.89 percent</strong></p>

							<p><strong>Partnerships and corporations: 16.24 percent Capital gains: 65.16 percent</strong></p>

							<p>The top 400 earned more than half of their income from capital assets. These assets are investments &ndash; such as cars, stocks, houses, bonds, valuable pieces of arts, and other significant properties.</p>

							<p>These only mean that living and working for a pure monthly income stream will not make you rich.</p>

							<p>An Influencer, having an extrovert&rsquo;s traits which are more favorable to business and companies, has already got what it takes to start a business. Use your charm and cheerful personalities to gain more clients and consumers for your business. Use your public speaking skills to look for investors so you will have more capital to start. You can train the right persons how to have their own Influencer skills to help manage the business.</p>

							<p><strong>These are the best niches to get you started in your business:</strong></p>

							<ul>
								<li>Clothing and fashion items</li>
								<li>Fitness Equipment</li>
								<li>Gadgets And Technology</li>
								<li>Home Improvement And D&eacute;cor</li>
								<li>Health-Conscious Foods</li>
								<li>Pet Supplies</li>
							</ul>
						</div>
						{{-- <a class="btn button-go-up" href="https://offers.wealthavatarr.com/oto-1" target="_blank">
							BUY product for 365 DAYS OF WEALTH AFFIRMATION
						</a> --}}
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection