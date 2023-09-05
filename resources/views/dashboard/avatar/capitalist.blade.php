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
    <img src="{{ asset('assets/img/dashboard/Home.png') }}" alt="Image" draggable="false" class="cta-image">
    <div class="text-center ps-3 ps-5 pe-5">
    <p class="p-style">
        The Capitalist are the most hardworking people, devoting almost all their time to work and business. Your fellow Capitalists within this group are punctual and results-driven. You always take initiative, because your mind is ever-flowing with creative ideas. A little change might irritate you, but your flexibility gets you back on track everytime. You have your own set of approaches and practices when it comes to leadership and creativity. This makes you unstoppable once your creative mind generates another idea. In short, your earning capacity fuel your mind to think and envision new ideas.
    </p>
    </div>
	<br>
</div>

<div class="container-subheading">
    <div class="container">
        <h1 class="styled-text-title">{{ $title }}</h1>
        <p class="styled-text decorative-border">SUPERPOWERS</p>
        <p class="styled-sub-text">WHY DO I NEED TO IDENTIFY <br> MY SUPERPOWERS AND STRENGTHS?</p>
        <p class="p-style">
            Good question. Let&rsquo;s start with knowing the importance of superpowers and strengths.&nbsp;
            <br>
            First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist extreme weather and endure stress. These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations.&nbsp;
            <br>
            Research further concluded that these skills and abilities can still be further developed according to one&rsquo;s limits.&nbsp;
            <br>
            The same goes to one&rsquo;s inner traits.&nbsp;
            <br>
            One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.
            <br>
            <strong>As THE CAPITALIST, here are the superpowers which you can focus on to build your first wealth base: </strong>
        </p>
        <br>

        <div class="row">
            <div class="col-9">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #1</span>
                <div class="styled-text-super">
                    Your Creative Mind Overflows With Income-Generating Projects
                </div>
            </div>
            <br>
            <br>
            <p class="p-style">
                When you think, you think long-term. Income-generating projects are hard to pass by, for someone who does not have a creative mind like yours. The Capitalists think of the problem they want to solve, and use it as a basis to think creatively. In fact, as of writing, you already have an idea or two which you are thinking of turning into a business very soon.
            </p>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9 text-center">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #2</span>
                <div class="styled-text-super">
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
        <br>
        <br>
        <div class="row">
            <div class="col-9">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #3</span>
                <div class="styled-text-super line-spacing">
                    Determined And Visionary
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Your curious and creative mind fuels your desire to act it out and turn everything into reality. A Capitalist knows that a person will have ups and downs, but he / she is prepared for this fact. You always have a backup plan which makes everything bearable from start to finish. That&rsquo;s how motivated you are.&nbsp;
                </p>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-9">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #4</span>
                <div class="styled-text-super">
                    Punctuality
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    A Capitalist knows that every project, from brainstorming to the execution stage, should be well-polished. The steps to your wealth-generation project, be it about a part time job, a new venture, or a simple passive investment should have a deadline, else, it will not come into fruition. You stick with these self-imposed deadlines and that&rsquo;s what separates you from the other archetypes.
                </p>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9 text-center">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #5</span>
                <div class="styled-text-super line-spacing">
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
        <br> <br> <br> <br>
    </div>
</div>

{{-- Weakness --}}
<div class="container-weaknesses">
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 text-center">
                <h1 class="styled-text-title" style="color: #6D4B34;"><b>{{ $title }}</b></h1>
                <p class="styled-text decorative-border-weak" style="color: #6D4B34;">WEAKNESSES</p>

                <br> <br> <br> <br>

                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-super line-spacing" style="color: #6D4B34;">
                        You Find It Hard To Trust People
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
        <div class="row">
            <div class="col-9 text-center">
                <br> <br>
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-super line-spacing" style="color: #6D4B34;">
                        You Are Obsessed With The Idea To Stay At The Top Of The Ladder
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
            <p class="p-style">
                Money has always been a measure of success for a Capitalist. Money is a sign of accomplishment and at the same time a status symbol. It&rsquo;s a very big negative energy &ndash; because a Capitalist&rsquo;s idea might really be helpful, yet if they think it&rsquo;s not enough to generate enough money at the start, it is automatically dropped from the list.&nbsp;
                <br>
                The biggest fear of a Capitalist is being taken that number one spot from them. They fear that they might be the next Nokia. They know that they always have to stay updated of the trends or they would be doomed forever.&nbsp;
            </p>
        <br>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 text-center">
                <br> <br>
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-super line-spacing" style="color: #6D4B34;">
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
        <br> <br> <br> <br> <br>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-wealth">A CAPITALIST</h1>

        <p class="styled-sub-text">
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
        <br> <br> <br>
        <div class="row">
            <div class="col-8">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #1</span>
                <div class="styled-text-super line-spacing" style="color: #423F32">
                    Your Physical And Mental Health Is Worth Your Time
                </div>
            </div>
            <br>
            <br>
                <p class="p-style-challenges">
                    Regular checkups and up-to-date vaccinations and screening tests can significantly prolong your life and possibly serious conditions can be treated early.&nbsp;
                    <br>
                    As a general rule, a person under the age of 50 should see a doctor for a routine physical checkup once every 3 years. A person over the age of 50 should go at least once a year.&nbsp;
                    <br>
                    An average doctor visit costs between $70-$250. Depending on the traffic and if you would rather opt for a walk-in visit, a doctor&rsquo;s visit would only take away 2 hours from your schedule.&nbsp;
                </p>
            </div>
            <div class="col-4"></div>
        </div>
        <br> <br> <br>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-super line-spacing" style="color: #423F32">
                    Building Wealth Is A Team Effort
                </div>
            </div>
            <br>
            <br>
                <p class="p-style-challenges">
                    No person became rich without a team backing him or her up. Microsoft was founded by Bill Gates and his childhood friend Paul Allen. In 1976, Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne. Mark Zuckerberg was helped by his classmates in creating and launching FaceMash &ndash; which would later on become Facebook.
                    <br>
                    Don&rsquo;t be mistaken that a team means a group of professionals working together towards one goal. That is one definition. But remember that you have your very own team at home &ndash; your spouse, parents, siblings, best friends, and trusted relatives. In fact, a team player does not have much qualifications. As long as you are working together in unity and with one goal, you are already considered a team.
                    <br>
                    Building wealth is rarely a one-man job. Even if you&rsquo;re only investing, you would need financial planners and managers or a stockbroker to trade. Both of you are considered a team with a single goal &ndash; to multiply your money.
                    <br>
                    Each people is gifted with a unique sets of gifts &ndash; a set of talents which will eventually fit in your path to success.
                    <br>
                    Business- and organization-wise, proper delegation is one of the skills of a good leader. He knows who trust with confidential matters, who would be the best person to do a certain task, and who would be the one who would bring significant and innovative results to the team. Team effort is a work in itself.
                </p>
            </div>
        </div>
        <br> <br> <br>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #3</span>
                <div class="styled-text-super line-spacing" style="color: #423F32">
                    Being Satisfied In Life Is A Matter Of Perspective
                </div>
            </div>
            <br>
            <br>
                <p class="p-style-challenges">
                    The Capitalists lives for the future. The problem is, the future is uncertain. What is certain is today. Look at the things around you, aren&rsquo;t they the exact things you once wished when you were a kid?&nbsp;
                    <br>
                    Being contented in the present does not mean that a person will never thrive to reach his/her dreams and goals in the future. Contentment means being happy and grateful with what you have today. These are your wishes from the past. These are products of your hardwork.&nbsp;
                </p>
            </div>
        </div>
        <br> <br> <br> <br>
    </div>
</div>
<div class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-5 line-spacing text-center">
                THE CAPITALIST'S WEALTH FORMULA
            </div>
            <div class="styled-text-formula mt-1 text-center">
                These problems can impact your wealth generation potential. Why is that so?
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="styled-text-sub-formula line-spacing mt-2">
                        <b> Health And Success Are Inter-Related.  </b>
                    </div>
                <div class="styled-text-formula mt-1">
                    <p class="p-style-formula">
                        Did you know that a research by the <a href="https://njaes.rutgers.edu/sshw/message/message.php?p=Finance&amp;m=190" target="_blank"> <span style="color: black;"><u>Rutgers Cooperative Extension Small Steps to Health and Wealth (SSHW)</u></span></a> shows that overweight and obesity are associated with lower earnings, particularly for women in professional occupations? Employers spend a lot in developing programs to help people maintain good health habits and provide clinical care for employees who might be ill to make them even more productive at work.
                    </p>
                </div>
                </div>
                <div class="col-4"></div>
            </div>

            <br>
            <div class="styled-text-sub-formula line-spacing mt-2 text-center">
                <b>
                    Happiness Is A Great Motivation To Wealth Generation.
                </b>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-7">
                    <div class="styled-text-formula mt-1">
                        <p class="p-style-formula">
                            In a <a href="http://sonjalyubomirsky.com/wp-content/themes/sonjalyubomirsky/papers/BLinpressb.pdf" target="_blank"> <span style="color: black"><u>study</u></span></a> by Julia Boehm &amp; Sonja Lyubomirsky of the University of California, it was shown that contrary to the perception of many, happiness precedes success. It may sound contrary, especially if happiness is associated with money. However, it is also shown in different studies that happiness is associated with the income level. Sometimes, spending a little bit for our wants can become a big motivation which can result to better wealth generation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-8">
                    <div class="styled-text-sub-formula line-spacing mt-2">
                        <b> 
                            People Who Are Good In Building Genuine Relationships Are Better At Wealth-Generation. 
                        </b>
                    </div>
                <div class="styled-text-formula mt-2">
                    <p class="p-style-formula">
                        The Grant Study of the Harvard Medical School that people in loving relationship are more inclined to earn well and use their money in a wiser manner to build wealth quickly. It does not necessarily mean being in a romantic relationship. The study is very specific that the relationship may be with a parent, grandparents, children, or friends.&nbsp;
                    </p>
                </div>
                </div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="styled-text-sub-formula line-spacing mt-2 text-center">
                <b>
                    Trust Issues
                </b>
            </div>
            <div class="styled-text-formula line-spacing mt-2 text-center" style="font-size: 2rem;">
                <b>
                    This is your power motivation formula in building your wealth as a Capitalist:
                </b>
            </div>

            <div class="styled-text-formula mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Team Work + Relationships
                    </span>
                    <br>
                    And For Your Ultimate Secret to Wealth-Generation:
                    <br>
                    Investing In Business And Life Coaching
                </b>
            </div>
        <br> <br> <br> <br> 
    </div>
</div>
{{-- Wealth Guide --}}
<div class="container-wealth-guide">
    <div class="container">
        <h1 class="styled-text-title-guide line-spacing"> {{$title}} <br>Wealth Guide</h1>

        <div class="row">
            <div class="col-md-6">
                <p class="p-style-guide">
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Capitalist would eventually encounter in this lifetime.
                    <br>
                    <br>
                    Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.
                </p>
            </div>
            <div class="col-md-6"></div>
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
        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-super" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #1 Enlist The Help Of A Business Coach
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            Did you know that Bill Gates (Microsoft), Steve Jobs (Apple), and Eric Schmidt (Google) worked with a business coach to help expand their businesses? In fact, they credit their respective successes to their business mentors. If it weren&rsquo;t for them, there would not be Google, Apple, and Microsoft today.
            <br>
            Business coaching will teach you how to achieve your small-term and long-term goals, while still attending to your other personal responsibilities. Business coaching is perfect for business which are too dependent on the owner &ndash; the exact situation of a Capitalist when they let the negative energy overshadow their skills and huge potential. A professional will teach you how to delegate tasks and scrutinize employees with whom you can share significant and confidential information with (if any)
            <br>
        </p>
        <p class="p-style-guide">
            <strong>Where Can I Find The Best Business Coach?</strong>
        </p>
        <ul class="p-style-guide">
            <li>Ask for referrals from friends and other entrepreneurs you know. If this is not possible, Google can help you find the best one for you. Avail a single session consultation with a prospect coach first, before availing their long-term services. Ask the business coach of their experience and track record, too.</li>
        </ul>

        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-super line-spacing" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #2 Invest In Long-Term Investments
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            Capitalists treat money as power and status. Their creativity, work performance, and business are usually their sources of money and income. The good news is these long-term investments will not require you to spend efforts and drain you to be rich. Long-term investments are those where you let your money stay for a long time to generate cash after a certain number of years. Do this when you are ready to part with some of your money and put it in an income-generating fund to leave it there for maximum returns.&nbsp;
            <br>
            <br>
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

        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-super line-spacing" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #3 Invest In Long-Term Investments
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            When you have enough funds to invest, opt for long-term investments. This is perfect for a Giver, because this time, letting someone handle this aspect of your finances will do you more good. A professional fund manager will be the one to handle all these to give you peace of mind and to let you continue your advocacies.
            <br>
            <br>
            <strong>Why Long-Term Investments?</strong>
        </p>

        <ul>
            <li>Less time-consuming. You won&rsquo;t need to be bothered by the fluctuations of the value of the asset.</li>
            <li>Higher returns of investment.</li>
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
            <br>
            There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.
        </p>
        <br> <br> <br> <br>
        
    </div>
</div>

@endsection