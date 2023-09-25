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
                The Capitalist are the most hardworking people, devoting almost all their time to work and business. Your fellow Capitalists within this group are punctual and results-driven. You always take initiative, because your mind is ever-flowing with creative ideas. A little change might irritate you, but your flexibility gets you back on track everytime. You have your own set of approaches and practices when it comes to leadership and creativity. This makes you unstoppable once your creative mind generates another idea. In short, your earning capacity fuel your mind to think and envision new ideas.
            </p>
        </div>
    </div>
	<br>
</div>

<div class="container-subheading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <br>
                <h1 class="styled-text-title mt-4 line-spacing">{{ $title }}</h1>
                <p class="styled-text decorative-border mt-2">SUPERPOWERS</p>
                <p class="styled-sub-text mt-4 mb-3">WHY DO I NEED TO IDENTIFY MY SUPERPOWERS AND STRENGTHS?</p>
                <p class="p-style"> 
                    Good question. Let&rsquo;s start with knowing the importance of superpowers and strengths.
                    <br>
                    First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist 
                    <br>
                    extreme weather and endure stress. 
                </p>
            </div>
            <div class="col-12 col-md-6 p-0">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/superpower.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style"> 
            These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations.
            <br>
            Research further concluded that these skills and abilities can still be further developed according to one&rsquo;s limits.
            <br>
            The same goes to one&rsquo;s inner traits.
            <br>
            One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.
            <br>
            <strong>As THE CAPITALIST, here are the superpowers which you can focus on to build your first wealth base: </strong>
        </p>
        <br>

        <div class="row">
            <div class="col-12 col-md-9">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #1</span>
                <div class="styled-text-sub-title line-spacing">
                    Your Creative Mind Overflows With Income-Generating Projects
                </div>
            </div>
            <br>
            <br>
            <p class="p-style">
                When you think, you think long-term. Income-generating projects are hard to pass by, for someone who does not have a creative mind like yours. The Capitalists think of the problem they want to solve, and use it as a basis to think creatively. In fact, as of writing, you already have an idea or two which you are thinking of turning into a business very soon.
            </p>
            </div>
            <div class="col-12 col-md-3">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/superpower1.png') }}" alt="Your Image" class="img-fluid" style="height: 100%; width: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/superpower2.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-9 text-center">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #2</span>
                <div class="styled-text-sub-title">
                    Your Ideas Are Usually Those That Will Stand out From Competitors
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    An idea and business concept, to be a hit, should be something that solves problems. A Capitalist knows this. As a matter of fact, this thinking makes you stand out from the rest of your competitors.&nbsp;
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-8">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #3</span>
                <div class="styled-text-sub-title line-spacing">
                    Determined And Visionary
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Your curious and creative mind fuels your desire to act it out and turn everything into reality. A Capitalist knows that a person will have ups and downs, but he / she is prepared for this fact. You always have a backup plan which makes everything bearable from start to finish. That&rsquo;s how motivated you are.&nbsp;
                </p>
            <br>
            <br>
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #4</span>
                <div class="styled-text-sub-title">
                    Punctuality
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    A Capitalist knows that every project, from brainstorming to the execution stage, should be well-polished. The steps to your wealth-generation project, be it about a part time job, a new venture, or a simple passive investment should have a deadline, else, it will not come into fruition. You stick with these self-imposed deadlines and that&rsquo;s what separates you from the other archetypes.
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/superpower3-4.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/superpower5.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-8 text-center">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #5</span>
                <div class="styled-text-sub-title line-spacing">
                    A Very Good Speaker
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Your income-generating project will soon generate jobs for many people, feeding their families and sending their kids to school. You are one of those envisioned to do great within your profession. You have very good speaking skills, because this is what you also use to turn your dreams into reality. Soon, you will be the one to be invited in career orientation or even a small motivational group. Your high spirits can bring good to people and encourage them to follow your track.&nbsp;
                </p>
            </div>
        </div>
        <br>
    </div>
</div>

{{-- Weakness --}}
<div class="container-weaknesses">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/weakness1.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7 text-center">
                <br>
                <h1 class="styled-text-title mt-4" style="color: #6D4B34;"><b>{{ $title }}</b></h1>
                <p class="styled-text decorative-border-weak" style="color: #6D4B34;">WEAKNESSES</p>

                <br> <br> <br>

                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Find It Hard <br>To Trust People
                    </div>
                </div>
            </div>
        </div>
        <br>
            <p class="p-style">
                A Capitalist does not really feel comfortable when they entrust a big project or a big deadline to people other than themselves. Their trust issues might have been rooted from their childhood or past relationship and friendship betrayals which led them to their fall.&nbsp;
                <br>
                Capitalists cannot delegate significant work, because of this fear of sabotage. Besides, you think that your own creative ways can bring the best results and only you could do it the way you wanted it to be.
            </p>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-9 text-center">
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Are Obsessed With The Idea To Stay At The Top Of The Ladder
                    </div>
                </div>
                <p class="p-style">
                    Money has always been a measure of success for a Capitalist. Money is a sign of accomplishment and at the same time a status symbol. It&rsquo;s a very big negative energy &ndash; because a Capitalist&rsquo;s idea might really be helpful, yet if they think it&rsquo;s not enough to generate enough money at the start, it is automatically dropped from the list.&nbsp;
                    <br>
                    The biggest fear of a Capitalist is being taken that number one spot from them. They fear that they might be the next Nokia. They know that they always have to stay updated of the trends or they would be doomed forever.&nbsp;
                </p>
            </div>
            <div class="col-12 col-md-3">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/weakness2.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/weakness3.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7 text-center">
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Feel That You Don&rsquo;t Always Have Enough Time
                    </div>
                </div>
                <p class="p-style">
                    Due to their ambitious nature, a Capitalist rarely has time for him/herself and their families. Frankly, they are the most disconnected from their friends and loved ones. Even if they do attend celebrations, their minds are filled with work-related matters.&nbsp;
                    <br>
                    This big negative energy is brought about by a Capitalist&rsquo;s obsession with greatness and their fear to be surpassed by their competitors. They fear that they&rsquo;ll miss out a significant detail. For them, time is running and lots of wealth-generating opportunities will pass them by.&nbsp;
                    <br>
                    A Capitalist fears that he would lose his financial stability and turn his efforts into a great waste.
                </p>
            </div>
        </div>
        <br>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 line-spacing text-center">
                <br> <br> <br> 
                <br> <br> <br> 
                <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
                <h1 class="styled-text-title-challeges"><b>A CAPITALIST</b></h1>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/challenges.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-challenges">
            A highly creative mind paired with determination is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.&nbsp;
        </p>

        <p class="p-style-challenges">
            Let&rsquo;s start.
        </p>

        <ol class="p-style-challenges">
            <li>Your Health Is Compromised</li>
            <li>Your Method Of Doing Things May Not be Efficient Enough</li>
            <li>You Have Troubles Building Genuine Relationships With Family, Friends, And Acquaintances</li>
            <li>You Are Very Hard To Be Satisfied With The Good Things Around You</li>
        </ol>
        <br> 
        <div class="row">
            <div class="col-12 col-md-7">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #1</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Your Physical And Mental Health Is Worth Your Time
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Regular checkups and up-to-date vaccinations and screening tests can significantly prolong your life and possibly serious conditions can be treated early.&nbsp;
                    <br>
                    As a general rule, a person under the age of 50 should see a doctor for a routine physical checkup once every 3 years. A person over the age of 50 should go at least once a year.&nbsp;
                    <br>
                    An average doctor visit costs between $70-$250. Depending on the traffic and if you would rather opt for a walk-in visit, a doctor&rsquo;s visit would only take away 2 hours from your schedule.&nbsp;
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/challenges1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br> 
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/challenges2.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Building Wealth Is A Team Effort
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    No person became rich without a team backing him or her up. Microsoft was founded by Bill Gates and his childhood friend Paul Allen. In 1976, Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne. Mark Zuckerberg was helped by his classmates in creating and launching FaceMash &ndash; which would later on become Facebook.
                    <br>
                    Don&rsquo;t be mistaken that a team means a group of professionals working together towards one goal. That is one definition. But remember that you have your very own team at home &ndash; your spouse, parents, siblings, best friends, and trusted relatives. In fact, a team player does not have much qualifications. 
                    <br>
                </p>
            </div>
        </div>
        <p class="p-style">
            As long as you are working together in unity and with one goal, you are already considered a team.
            <br>
            Building wealth is rarely a one-man job. Even if you&rsquo;re only investing, you would need financial planners and managers or a stockbroker to trade. Both of you are considered a team with a single goal &ndash; to multiply your money.
            <br>
            Each people is gifted with a unique sets of gifts &ndash; a set of talents which will eventually fit in your path to success.
            <br>
            Business- and organization-wise, proper delegation is one of the skills of a good leader. He knows who trust with confidential matters, who would be the best person to do a certain task, and who would be the one who would bring significant and innovative results to the team. Team effort is a work in itself.
        </p>
        <br> 
        <div class="row">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #3</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Being Satisfied In Life Is A Matter Of Perspective
                </div>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/challenges3.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
            <br>
                <p class="p-style">
                    The Capitalists lives for the future. The problem is, the future is uncertain. What is certain is today. Look at the things around you, aren&rsquo;t they the exact things you once wished when you were a kid?&nbsp;
                    <br>
                    Being contented in the present does not mean that a person will never thrive to reach his/her dreams and goals in the future. Contentment means being happy and grateful with what you have today. These are your wishes from the past. These are products of your hardwork.&nbsp;
                </p>
            </div>
        </div>
        <br> 
    </div>
</div>
<div class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-3 line-spacing text-center">
                {{-- THE CAPITALIST'S WEALTH FORMULA --}}
                Your Wealth Formula 
            </div>
            <div class="styled-sub-text-formula text-center">
                These problems can impact your wealth generation potential. Why is that so?
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="styled-text-sub-title-formula line-spacing mt-2">
                        <b> Health And Success Are Inter-Related.  </b>
                    </div>
                    <p class="p-style-formula">
                        Did you know that a research by the <a href="https://njaes.rutgers.edu/sshw/message/message.php?p=Finance&amp;m=190" target="_blank"> <span style="color: black;"><u>Rutgers Cooperative Extension Small Steps to Health and Wealth (SSHW)</u></span></a> shows that overweight and obesity are associated with lower earnings, particularly for women in professional occupations? Employers spend a lot in developing programs to help people maintain good health habits and provide clinical care for employees who might be ill to make them even more productive at work.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/img/dashboard/The Capitalist/wealth1.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Capitalist/wealth2.png') }}" alt="Your Image" class="img-fluid">
                </div>
                <div class="col-12 col-md-7">
                    <br> <br> <br> <br> <br>
                    <div class="styled-text-sub-title-formula line-spacing text-center">
                        <b>
                            Happiness Is A Great Motivation To Wealth Generation.
                        </b>
                    </div>
                    <p class="p-style-formula">
                        In a <a href="http://sonjalyubomirsky.com/wp-content/themes/sonjalyubomirsky/papers/BLinpressb.pdf" target="_blank"> <span style="color: black"><u>study</u></span></a> by Julia Boehm &amp; Sonja Lyubomirsky of the University of California, it was shown that contrary to the perception of many, happiness precedes success. It may sound contrary, especially if happiness is associated with money. However, it is also shown in different studies that happiness is associated with the income level. Sometimes, spending a little bit for our wants can become a big motivation which can result to better wealth generation.
                    </p>
                </div>
            </div>
            <br>
            <div class="row mt-2">
                <div class="col-12 col-md-7">
                    <div class="styled-text-sub-title-formula line-spacing mt-2">
                        <br> <br> <br> <br>
                        <b> 
                            People Who Are Good In Building Genuine Relationships Are Better At Wealth-Generation. 
                        </b>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Capitalist/wealth3.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <p class="p-style-formula">
                The Grant Study of the Harvard Medical School that people in loving relationship are more inclined to earn well and use their money in a wiser manner to build wealth quickly. It does not necessarily mean being in a romantic relationship. The study is very specific that the relationship may be with a parent, grandparents, children, or friends.&nbsp;
            </p>
            <br>
            {{-- <div class="styled-text-sub-title-formula line-spacing mt-2 text-center">
                <b>
                    Trust Issues
                </b>
            </div> --}}
            <div class="styled-text-formula line-spacing mt-2 text-center" style="font-size: 2rem;">
                <b>
                    This is your power motivation formula in building your wealth as a Capitalist:
                </b>
            </div>

            <div class="mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="color: #AF846D; font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Team Work + Relationships
                    </span>
                </b>
            </div>
        <br> 
    </div>
</div>
{{-- Wealth Guide --}}
<div class="container-wealth-guide">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <br>
                <h1 class="styled-text-title mt-5 mb-0" style="color: #6D4B34;"><u>{{$title}}</u></h1>
                <h1 class="styled-text-title-formula mt-0">Wealth Guide</h1>
                <br> <br>
                <p class="p-style-guide">
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Capitalist would eventually encounter in this lifetime.
                    <br>
                    <br>
                    Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/guide1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br>
        <p class="p-style-guide">
            These fears are reasonable. You want to build wealth in the shortest possible time. You want to watch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.
            <br>
            <br>
            However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.
        </p>

        <br>
        <div class="styled-text-guide line-spacing mt-1 text-center">
            Here are the solutions catered just for a Capitalist like you:
        </div>

        <br>
        <div class="text-center">
            <div class="decorative-border-guide" style="background-color: #AF846D">
                <div class="styled-text-sub-title" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #1 Enlist The Help Of A Business Coach
                    </b>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <p class="p-style-guide mt-5">
                    Did you know that Bill Gates (Microsoft), Steve Jobs (Apple), and Eric Schmidt (Google) worked with a business coach to help expand their businesses? In fact, they credit their respective successes to their business mentors. If it weren&rsquo;t for them, there would not be Google, Apple, and Microsoft today.
                    <br> <br>
                    Business coaching will teach you how to achieve your small-term and long-term goals, while still attending to your other personal responsibilities. Business coaching is perfect for business which are too dependent on the owner &ndash; the exact situation of a Capitalist
                    <br>
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/guide2.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-guide">
            when they let the negative energy overshadow their skills and huge potential. A professional will teach you how to delegate tasks and scrutinize employees with whom you can share significant and confidential information with (if any)
        </p>
        <br> <br>
        <p class="p-style-guide">
            <strong>Where Can I Find The Best Business Coach?</strong>
        </p>
        <ul class="p-style-guide">
            <li>Ask for referrals from friends and other entrepreneurs you know. If this is not possible, Google can help you find the best one for you. Avail a single session consultation with a prospect coach first, before availing their long-term services. Ask the business coach of their experience and track record, too.</li>
        </ul>

        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #2 Invest In Long-Term Investments
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            Capitalists treat money as power and status. Their creativity, work performance, and business are usually their sources of money and income. The good news is these long-term investments will not require you to spend efforts and drain you to be rich. Long-term investments are those where you let your money stay for a long time to generate cash after a certain number of years. Do this when you are ready to part with some of your money and put it in an income-generating fund to leave it there for maximum returns.&nbsp;
            <br>
            <br>
        </p>

        <div class="row">
            <div class="col-12 col-md-8">
                <p class="p-style-guide">
                    <strong>Why Long-Term Investments?</strong>
                </p>

                <ul>
                    <li>
                        Less time-consuming. You won&rsquo;t need to be bothered by the fluctuations of the value of the asset.
                    </li>
                    <li>
                        Higher returns of investment.
                    </li>
                </ul>

                <p class="p-style-guide"><strong>What Are The Best Long-Term Investments?</strong></p>

                <ul>
                    <li>Stocks</li>
                    <li>Corporate and Treasury Bonds</li>
                    <li>Mutual Funds</li>
                </ul>

                <p class="p-style-guide">
                    <strong>Where To Avail?</strong>
                    <br>
                    Mutual Funds are offered by banks as well. As your local bank about their own investment fund managed by experts that are expected to yield huge returns after sometime. The good thing about this is that you don&rsquo;t need to learn the in-depths of stock trading because the experts will handle it for you. Unit Investment Trust or mutual funds managed by some retail banks require a minimum investment of $500.
                    <br>
                    There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Capitalist/guide3.png') }}" alt="Your Image" class="img-fluid" style="100%;">
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