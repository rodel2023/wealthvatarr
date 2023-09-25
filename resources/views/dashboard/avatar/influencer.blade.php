@extends('layouts.premium')
<style>
.cta-image-formula {
    width: 100%;
    max-width: 1400px; /* Adjust as needed */
    margin: 0 auto;
    padding: 20px;
    background-image: url('assets/img/dashboard/Work.png'); /* Replace with your image URL */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

@section('content')
<div class="text-center" style="background-color: #D7C07C">
    <img src="{{ asset('assets/img/dashboard/'.$title.'.png') }}" alt="Image" draggable="false" class="cta-image">
    <div class="text-center ps-3 ps-5 pe-5">
        <div class="container">
            <p class="p-style">
				The Influencers love to stand out from the crowd and they never fail to do such. They make the best first impressions because of their charm and the things they own. They bring radiance to any room they are in and they are always oozing with confidence wherever they may be. No wonder a lot of people are astonished with an influencer.
				<br>
				An Influencer attracts people and experiences. They view money as the source of every good thing in life. They work to buy the things they want and regard these expensive stuff as a source of power, authority, and good impressions.
				<br>
				In short, an influencer earning capacity is motivated by his or her desire to stand out and buy luxury.
            </p>
        </div>
    </div>
	<br>
</div>

<div class="container-subheading">
    <div class="container">

        <div class="text-center">
            <h1 class="styled-text-title mt-4 line-spacing">{{ $title }}</h1>
            <p class="styled-text decorative-border mt-2">SUPERPOWERS</p>
        </div>
        <p class="styled-sub-text mt-4 mb-3">WHY DO I NEED TO IDENTIFY MY SUPERPOWERS AND STRENGTHS?</p>
        <p class="p-style"> 
            Good question. Let&rsquo;s start with knowing the importance of superpowers and strengths.
            <br> <br>
            First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist extreme weather and endure stress. 
            These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations.
            <br> <br>
            Research further concluded that these skills and abilities can still be further developed according to one&rsquo;s limits.
            <br>
            The same goes to one&rsquo;s inner traits.
            <br> 
            <br>
            One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.
            <br> 
            <br> 
            As THE INFLUENCER, here are the superpowers which you can focus on to build your first wealth base:
        </p>

        <div class="row">
            <div class="col-12 col-md-5">
                <br>
                <img src="{{ asset('assets/img/dashboard/The Influencer/superpower1.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
                <br> <br> <br>
                <div class="decorative-border text-center mt-5">
                    <span class="span-box">SUPERPOWERS #1</span>
                    <div class="styled-text-sub-title line-spacing">
                        You Always Ooze With Self-Confidence
                    </div>
                </div>
                <br>
                <p class="p-style">
                    In fact, you never know that your radiance and high confidence can be contagious that it can influence people to follow suit. An Influencer believes in his/her abilities to take the center stage. They make a grand entrance effortlessly. They believe that their skills are enough to be showcased around and they always carry their blings which significantly can add to&nbsp; their radiance and shine.
                </p>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-9">
                <br>
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #2</span>
                    <div class="styled-text-sub-title">
                        You Attract People And Opportunities
                    </div>
                </div>
                <br>
                <p class="p-style">
                    People know you are one in a kind. Thanks to your cheerful personality and the things you own which screams class and grace, people trust that you can do a job easily. Paired with a high self- esteem, an Influencer is one of the best team players to attract opportunities for the whole group.
                    <br>
                </p>
                <br> <br>
            </div>
            <div class="col-12 col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/superpower3.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #3</span>
                    <div class="styled-text-sub-title line-spacing">
                        Influencers Appreciate Opportunities
                    </div>
                </div>
                    <p class="p-style">
                        They may not make opportunities but influencers never let them pass once a door has been opened for them. It&rsquo;s a great way to bring in wealth so why have second thoughts? An influencer understands that not everyone gets the same opportunity which makes them appreciate it even more. They take actions when it comes to wealth generation.
                    </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <br> 
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #4</span>
                    <div class="styled-text-sub-title">
                        Influencers Are Very Good Speakers
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    Influencers make it easy when it comes to public interaction. They have the best public relations skills. Influencers have the ability to persuade someone by their charm and speaking skills. It adds to their executive image.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/superpower4.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/superpower5.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #5</span>
                    <div class="styled-text-sub-title">
                        Your Generosity Brings You To The Center Stage, Too
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    An Influencer helps in a way that can bring them to the center of attention, too. They never fail to ask how you&rsquo;ve been or ask for anything that they can help you with.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Weakness --}}
<div class="container-weaknesses">
    <div class="container">
        <div class="text-center">
            <h1 class="styled-text-title mt-4" style="color: #6D4B34;"><b>{{ $title }}</b></h1>
            <p class="styled-text decorative-border-weak" style="color: #6D4B34;">WEAKNESSES</p>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="decorative-border-weak mt-2 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        Your Desire To Spend <br>Compulsively Is Unstoppable
                        You Have an Unstoppable Desire to Spend Compulsively
                    </div>
                </div>
                <p class="p-style">
                    It doesn&rsquo;t matter whether a certain item is on sale or not, as long as the Influencer desires it, it is considered sold. It is compulsive because these items are usually not necessary to live. They fall under wants and not under necessities. An Influencer has their own criteria on what to buy impulsively &ndash; as it is usually the expensive ones and useful in such a way that it can elevate his or her status, figure, and authority.
                <br>
                <strong>
                    These are the usual signs that point out you are a compulsive spender:
                </strong>
                </p>
                <ul class="p-style">
                    <li>Your shopping expenses for wants take up a significant portion from your monthly income.</li>
                    <li>You go into debt because of it</li>
                    <li>You hide your extravagant purchases from family members and loved ones</li>
                    <li>You rarely use these purchases</li>
                    <li>Your New Year&rsquo;s Resolution always include limiting your impulse purchases</li>
                    <li>You&rsquo;re energetic and in the mood when it comes to shopping, online or not.</li>
                    <li>When you&rsquo;re sad and lonely, you feel that shopping can alleviate your feelings and your coping mechanism from stress.</li>
                </ul>
            </div>
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Influencer/weakness1.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Influencer/weakness2.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
                <br> 
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Cling Onto Your Unhappy Childhood
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    An Influencer&rsquo;s materialism is a result of his or her unhappy childhood experiences. They found solace in the things they own now as a working adult, to compensate with the fact that their&nbsp; past is not that satisfying. Expensive stuff are usually the things that mask their sadness and insecurities from the past.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 text-center">
            <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Are Obsessed With Insecurities
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    No one is ever happy about their own insecurities but an influencer is oftentimes highly insecure about his or her own. They tend to mask it with the things they can buy and own. Their excessive positivity, sometimes, is only a front to mask your emotional baggage. You rarely say that there&rsquo;s something wrong even in front of your best of friends for fear that you&rsquo;d get judgment and reveal your insecurities and ugly past to them.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Influencer/weakness3.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-challeges"><b>A INFLUENCER</b></h1>
        <p class="p-style-challenges">
            A radiant image and genuine high self-confidence, with the right motivation and true appreciation of the result is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.
        </p>

        <p class="p-style-challenges">
            Let&rsquo;s start.
        </p>

        <ol class="p-style-challenges">
            <li>Your Efforts May Not Enough To Keep Your Lifestyle</li>
            <li>You Are Far From Achieving Genuine Happiness</li>
            <li>Your Desire For Status And Power Will You Even More Uncomfortable</li>
            <li>You Have Troubles Building Genuine Relationships With Family, Friends, And Acquaintances</li>
        </ol>
        <br> 
        <div class="decorative-border text-center">
            <span class="span-box" style="color: #000000">CHALLENGE #1</span>
            <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                When Your Extravagant Purchases Are Not Matched With Your Earning Capacity, You Won&rsquo;t Achieve Financial Happiness And Independence
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-7">
                <p class="p-style mt-5">
                    It&rsquo;s not uncommon to see a person with an Influencer archetype living with someone who can share some of their expenses. An Influencer&rsquo;s earning capability today may not be enough to fund the lifestyle that he or she is living in right now. This fact makes them far from being debt- free.
                    <br>
                    An Influencer&rsquo;s desire for fame, status, and authority through extravagant purchases is a surefire way not to achieve financial happiness and independence early. 
                    <br>
                    Many aspire to achieve this kind of happiness and independence while they are still young and able to enjoy the things in life. This is one of the challenges for you as an influencer, for you are the type that invests in things
                    <br>
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/challenges1.png') }}" alt="Your Image" class="img-fluid mt-2">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/challenges2.png') }}" alt="Your Image" class="img-fluid mt-2">
            </div>
            <div class="col-12 col-md-7">
            <div class="decorative-border mt-5 text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Genuine Happiness Comes Not Only From Material Things
                </div>
            </div>
                <p class="p-style">
                    <br>
                    Now, your happiness comes only from the material things you own. This kind of happiness is temporary, only to fill the void and compensate for the intense feelings which make you impulse buy the things you desire. A psychologist Tim Kasser told American Psychological Association in 2014 that according to his research, materialism will lead to an unhappier life eventually.
                    <br>
                    The research further concluded that the more materialistic a person is, the more likely he is going to experience unpleasant emotions, the more physical health problems they experience, and the less they feel happy emotions than those who are less materialistic.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-3 line-spacing text-center">
                The Influencer's <br>Wealth Formula 
            </div>
            <div class="styled-sub-text-formula text-center">
                These problems can impact your wealth generation potential. Why is that so?
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="styled-text-sub-title-formula line-spacing mt-1">
                        <b>
                            Happiness Is A Great Motivation To Wealth Generation.
                        </b>
                    </div>
                    <p class="p-style-formula">
                        In a <a href="http://sonjalyubomirsky.com/wp-content/themes/sonjalyubomirsky/papers/BLinpressb.pdf" target="_blank"> <span style="color: black"><u>study</u></span></a> by Julia Boehm &amp; Sonja Lyubomirsky of the University of California, it was shown that contrary to the perception of many, happiness precedes success. It may sound contrary, especially if happiness is associated with money. However, it is also shown in different studies that happiness is associated with the income level. Sometimes, spending a little bit for our wants can become a big motivation which can result to better wealth generation.
                    </p>
                    <br> <br>
                    <div class="styled-text-sub-title-formula line-spacing ">
                        <b>
                            Your Saving Habits Will Jumpstart Your Wealth Generation Capabilities
                        </b>
                    </div>
                    <p class="p-style-formula">
                        Great investments are a result of hard work paired with a risk-taking attitude. The best time to invest for a faster and higher return of investment in the near future is to invest as soon as you start earning an income. If a person keeps on spending and reasoning out that they deserve it, nothing will be left for them to invest. The things that they really deserve in the future will remain far-fetched. Investments need money to run. In wealth generation, you need the money to work for you.
                    </p>
                    <br> <br>
                    <div class="styled-text-sub-title-formula line-spacing mt-2">
                        <b> 
                            Science Says That Conscientious People Are Most Likely To Get Rich
                        </b>
                    </div>
                    <p class="p-style-formula">
                        A <a href="https://bpspsychub.onlinelibrary.wiley.com/doi/abs/10.1111/bjop.12360" style="text-decoration: none; color: black">2018 study </a>from the British Journal of Psychology concludes that focus on what they need to do instead on what they want to do. If you are focusing to buy stuff that you need because it signifies power and therefore, makes you happy, then you are more likely to be inferior in terms of your wealth-generating capacity. People who are planning how to earn more money, get promotions, and think of ways to make theirselves sellable are the people who will earn more than double in only a matter of years from now.
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Influencer/wealth.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
                </div>
            </div>
            <div class="styled-text-formula line-spacing mt-5 text-center" style="font-size: 2rem;">
                <b>
                    This is your power motivation formula in building your wealth as a Influencer:
                </b>
            </div>

            <div class="mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="color: #AF846D; font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Perspective
                    </span>
                </b>
            </div>
        <br> 
    </div>
</div>
{{-- Wealth Guide --}}
<div class="container-wealth-guide">
    <div class="container">
        <div class="text-center">
            <h1 class="styled-text-title mt-5 mb-0" style="color: #6D4B34;"><u>{{$title}}</u></h1>
            <h1 class="styled-text-title-formula mt-0">Wealth Guide</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="p-style-guide">
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Influencer would eventually encounter in this lifetime.
                    <br>
                    <br>
                    Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.
                    <br>
                    <br>
                    These fears are reasonable. You want to build wealth in the shortest possible time. You want to watch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Influencer/guide1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-guide">
            <br>
            However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. 
            <br>
            <br>
            It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.
        </p>
        <br>
        <div class="styled-text-guide line-spacing mt-1 text-center">
            Here are the solutions catered just for a Influencer like you:
        </div>

        <br>

        <div class="text-center">
            <div class="decorative-border-guide" style="background-color: #AF846D">
                <div class="styled-text-sub-title" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #1 Enlist The Help Of A Life Coach
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide mt-2">
            One thing that this wealth personality reading wants you to do is to get your life back. Your ugly childhood memories and hurtful past are still controlling you today that you are letting your emotions decide for you. You may be grabbing the best opportunities right away, but the results of these opportunities will be put into waste if you don&rsquo;t spend it wisely.
            <br>
            Contrary to the belief of many, a life coach is not similar to psychologist. Don&rsquo;t be afraid to get judged because you are working with one. Wealthy personalities and celebrities have their own life coaches to guide their goals and principles in life. Oprah Winfrey credits her life coach to her success. Leonardo DiCaprio enlisted the help of a life coach and his current status and achievements in life speak for themselves how successful life coaching is for him. Bill Clinton, Serena Williams, and Hugh Jackman are some of the famous personalities who are very vocal that they have discovered their own path to success thanks to their life coaches.
        </p>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="p-style-guide mt-2">
                    <b>
                        A life coach will tackle about your specific obstacles, what&rsquo;s taking you back from making progress, and will clarify your goals to work on to. Even your compulsive spending will be addressed. These are the specific job responsibilities of a life coach:
                    </b>
                </p>
                <ul class="p-style-guide">
                    <li>Help you attain work/life balance</li>
                    <li>Address your fears and help eliminate them</li>
                    <li>Teach you how to build stronger relationships</li>
                    <li>Enhance your creativity</li>
                    <li>Realign your long-term goals</li>
                    <li>Improve communication skills</li>
                    <li>Manage your time effectively</li>
                    <li>Create specific goals to achieve your dreams</li>
                </ul>

            </div>
            <div class="col-12 col-md-6">
                <br> <br>
                <img src="{{ asset('assets/img/dashboard/The Influencer/guide2.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-guide">
            Consider a life coach as someone who drags you out of bed every morning. Most people need assistance and an authoritative figure to change bad habits and stick to their plan. A life coach can act as one to help you jumpstart your wealth generation journey.
        </p>
        <br>
        <div class="text-center">
            <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #2 Invest In Long-Term Investments
                    </b>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-7">
                <p class="p-style-guide">
                    This is perfect for an Influencer. Find investments which will require you not to withdraw your money for a certain number of years. Consider this as a very good practice to curb your compulsive spending tendencies. Every time you earn money, put at least 20% of it to a long- term investment fund.
                    <br>
                </p>
                <p class="p-style-guide">
                    <strong>Why Long-Term Investments?</strong>
                    <ul>
                        <li>Less time-consuming. You won&rsquo;t need to be bothered by the fluctuations of the value of the asset.</li>
                        <li>Higher returns of investment.</li>
                    </ul>
                    <p class="p-style-guide">
                        <strong>What Are The Best Long-Term Investments?</strong>
                    </p>

                    <ul>
                        <li>Stocks</li>
                        <li>Corporate and Treasury Bonds</li>
                        <li>Mutual Funds</li>
                    </ul>
                </p>
                <p class="p-style-guide">
                    <strong>Where To Avail?</strong>
                    <br>
                    Mutual Funds are offered by banks as well. As your local bank about their own investment fund managed by experts that are expected to yield huge returns after sometime. The good thing about this is that you don&rsquo;t need to learn the in-depths of stock trading because the experts will handle it for you. Unit Investment Trust or mutual funds managed by some retail banks require a minimum investment of $500.
                    <br>
                    <br>
                    There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Influencer/guide3.png') }}" alt="Your Image" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <br>
        <div class="text-center">
            <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #3 Start A Side Business
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide">
            Inc.com published a <a href="https://www.inc.com/jeff-haden/how-science-says-people-who-get-rich-are-different-from-everyone-else.html" style="text-decoration: none; color: black">report </a>noting some interesting facts about &quot;The 400 Individual Tax Returns Reporting the Largest Adjusted Gross Incomes&rdquo; by the IRS. Interestingly, this is how the top 400 taxpayers earned their income for that year:
            <br>
        </p>

        <div class="row">
            <div class="col-12 col-md-8">
                <br> 
                <p class="p-style-guide">
                    Wages and salaries: 4.47 percent 
					<br>
                    Interest: 4.24 percent
					<br>
                    Dividends: 10.89 percent
					<br>
                    Partnerships and corporations: 16.24 percent 
					<br>
                    Capital gains: 65.16 percent
					<br> <br>
					The top 400 earned more than half of their income from capital assets. These assets are investments &ndash; such as cars, stocks, houses, bonds, valuable pieces of arts, and other significant properties.  These only mean that living and working for a pure monthly income stream will not make you rich.
					<br> <br>
					An Influencer, having an extrovert&rsquo;s traits which are more favorable to business and companies, has already got what it takes to start a business. Use your charm and cheerful personalities to gain more clients and consumers for your business. Use your public speaking skills to look for investors so you will have more capital to start. You can train the right persons how to have their own Influencer skills to help manage the business.
					<br>
					<br>
					<strong>These are the best niches to get you started in your business:</strong>
                </p>
                <ul>
                    <li>Clothing and fashion items</li>
                    <li>Fitness Equipment</li>
                    <li>Gadgets And Technology</li>
                    <li>Home Improvement And D&eacute;cor</li>
                    <li>Health-Conscious Foods</li>
                    <li>Pet Supplies</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Influencer/guide4.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
    </div>
    
    <div class="container-deluxe">
        <a href="https://perpetualincome365.convertri.com/pre-registration" target="_blank" class="btn-deluxe-reading">Income Replacement Side-Hustle For <i>{{$title}}</i></a>
    </div>

</div>


<div class="fe-image-content">
    <h1>Commissioned 5-Minute A Day Miracle-Wealth Audio</h1>
    <br>
    <audio controls autoplay controlsList="nodownload">
        <source src="{{ asset('assets/audio/FE - 5 Minutes.mp3')  }}" type="audio/mpeg" class="mb-4">
    </audio>
    <br>
    <h3>Crafted for:</h3>
    <h4><u>{{$title}}</u></h4>
</div>

<div style="background-color: white;">
	<div class="container pt-2" style="background-color: white;">
		<h4 class="text-center">
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


@endsection
