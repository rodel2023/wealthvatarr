{{-- @extends('layouts.premium') --}}
@extends('layouts.premium-dashboard')
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
                The Salesperson are best people to be with, whenever and wherever. They are the most outgoing people and they go along with everyone as if it&rsquo;s already part of their daily routine. Connections easily come to their door. They are the most trustworthy among the other archetypes.
                <br>
                You have your own set of approaches and practices when it comes to developing genuine relationships with other people. In fact, you credit them in all your small wins and successes.
                <br>
                In short, your earning capacity is heavily connected with your connections and relationships with the people.
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
            <br> <br>
            One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.
            <br> <br>
            As THE SALESPERSON, here are the superpowers which you can focus on to build your first wealth base:
        </p>

        <div class="row">
            <div class="col-12 col-md-5">
                <br>
                <img src="{{ asset('assets/img/dashboard/The Salesperson/superpower1-2.png') }}" alt="Your Image" class="img-fluid" style="height: 90%; width: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <br> 
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #1</span>
                    <div class="styled-text-sub-title line-spacing">
                        You Are Never Anxious About Money
                    </div>
                </div>
                <br>
                <p class="p-style">
                    A Salesperson is free from financial-stress, simply because they are not worried about money. They feel secured knowing they have friends and relatives with whom they&rsquo;ve formed a deep bond with. They know that establishing connections is a source of living and that they&rsquo;ll be able to stay employed because of this gift.
                </p>
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #2</span>
                    <div class="styled-text-sub-title">
                        You Are Not Materialistic
                    </div>
                </div>
                <br>
                <p class="p-style">
                    The Salesperson are not fascinated with the things that money can buy &ndash; such as luxurious items and other expensive stuff that other wealth archetypes are aiming to have. They value experiences with friends and family. They would spend money on these experiences rather than a single item. They consider themselves blessed as long as they receive love, affection, and more friendships.
                    <br>
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #3</span>
                    <div class="styled-text-sub-title line-spacing">
                        People Come To You Because Of Your Connections
                    </div>
                </div>
                <br>
                <br>
                    <p class="p-style">
                        This is considered a usual thing for a Salesperson. In fact, a Salesperson like you is showered with gifts just to become a bridge for two persons who are not gifted with the same ability as yours. Especially for businessmen, you are a prized employee because of this talent. You never fail at making genuine connections and that makes you stand out from your peers, too.
                    </p>
                <br>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/superpower3.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/superpower4-5.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #4</span>
                    <div class="styled-text-sub-title">
                        Confident And Humble
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    Only you can master self-confidence and humility at the same time. People like you because you know your wants and strengths, yet you keep your feet on the ground on things that you admittedly have no mastery about.
                </p>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #5</span>
                    <div class="styled-text-sub-title">
                        You Are Open To Criticisms
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    Flexibility is one of the top traits which can advance a Salesperson&rsquo;s career. They listen to other&rsquo;s ideas and comments to improve themselves. Believe it or not, Salespersons are very good team players!
                </p>
            </div>
        </div>
        <br> 
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
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/weakness1.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Let Other People <br>Dictate Your Happiness
                    </div>
                </div>
                <br>
                <p class="p-style">
                    You feel sad and down when you see other people feeling blue. When you decide on a matter, you always see to it that your decision will make others happy, even at your expense. In short, you just don&rsquo;t feel comfortable when people around you are not okay, even for things that are beyond your control.
                    <br>
                    This is a negative energy that you need to work on. When you let people influence your decisions, you will end up exhausting yourself for reasons that are not pertaining to you. Your happiness will forever depend on them and chances are, you will sacrifice a lot of energy, time, and even money for others who are not worthy of it.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <br> <br> <br>
                <div class="decorative-border-weak mt-3 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Are Too Trusting
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    You still believe that all people are inherently good and that being good to them will do the same upon you. Appearance deceives you a lot. You&rsquo;ve been scammed once, but you&rsquo;re the stubborn one because you believe that it won&rsquo;t happen again for someone like you who desires for nothing but goodness for others.
                    <br>
                    You know you are too trusting when you agree on something even before doing verification and having second thoughts. You let your intuition and belief decide for you, instead of using logic. You forgive a lot even after several repetition of someone&rsquo;s bad habits.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/weakness2.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/weakness3.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7 text-center">
                <br>
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Say Yes At Every Responsibility
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    His is how you make good impressions &ndash; by saying to responsibility even if it&rsquo;s different from your skills. You say yes at every task, at the expense of yourself. This is a big negative energy. A person needs downtime. A break time is not equivalent to saying yes to more responsibilities.
                </p>
                
            </div>
        </div>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-challeges"><b>A SALES PERSON</b></h1>
        <p class="p-style-challenges">
            A highly creative mind paired with determination is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.
        </p>

        <p class="p-style-challenges">
            Let&rsquo;s start.
        </p>

        <ol class="p-style-challenges">
            <li>You Are Prone To Scams And Financial Advances</li>
            <li>Your Lifestyle Is Not Enough To Make You More Content And Happier</li>
            <li>You Are Very Hard To Be Satisfied With The Good Things Around You</li>
        </ol>
        <br> 
        <div class="row">
            <div class="col-12 col-md-7">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #1</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Lack Of Financial Independence And Stability
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    The first stages of wealth generation involve being debt-free so you&rsquo;d be more financially free and independent.
                    <br>
                    <br>
                    This will never happen for someone who finds it hard to talk and learn about money. People who are not clear about their financial goals are those who are far from being financially independent and happy.
                    <br>
                    <br>
                    Your lack of financial literacy will also make you more vulnerable to scams and frauds. That is, because they will only talk so little about how money will work for you and your belief in the inherent goodness of people makes you an easy target. Adversaries are very friendly and them trusting their finances to other people increases the likelihood that your income will fall into the wrong hands.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/challenges1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br> 
        <div class="row">
            <div class="col-12 col-md-5">
                <br> <br>
                <img src="{{ asset('assets/img/dashboard/The Salesperson/challenges2.png') }}" alt="Your Image" class="img-fluid mt-5">
            </div>
            <div class="col-12 col-md-7">
            <div class="decorative-border mt-5 text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Building Wealth Is A Team Effort
                </div>
            </div>
                <p class="p-style">
                    No person became rich without a team backing him or her up. Microsoft was founded by Bill Gates and his childhood friend Paul Allen. In 1976, Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne. Mark Zuckerberg was helped by his classmates in creating and launching FaceMash &ndash; which would later on become Facebook.
                    <br>
                    Don&rsquo;t be mistaken that a team means a group of professionals working together towards one goal. That is one definition. But remember that you have your very own team at home &ndash; your spouse, parents, siblings, best friends, and trusted relatives. In fact, a team player does not have much qualifications. As long as you are working together in unity and with one goal, you are already considered a team.
                    <br>
                </p>
            </div>
        </div>
        <p class="p-style">
            Building wealth is rarely a one-man job. Even if you&rsquo;re only investing, you would need financial planners and managers or a stockbroker to trade. Both of you are considered a team with a single goal &ndash; to multiply your money.
            <br>
            Each people is gifted with a unique sets of gifts &ndash; a set of talents which will eventually fit in your path to success.
            <br>
            Business- and organization-wise, proper delegation is one of the skills of a good leader. He knows who trust with confidential matters, who would be the best person to do a certain task, and who would be the one who would bring significant and innovative results to the team. Team effort is a work in itself.
        </p>
        <br> 
            <div class="decorative-border mt-5 text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #3</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Being Satisfied In Life Is A Matter Of Perspective
                </div>
            </div>
            <br>
        <div class="row">
            <div class="col-12 col-md-6">
            <br>
                <p class="p-style">
                    The Salespersons lives for the future of the people. The problem is, the future is uncertain and people are not what they seem to be. What is certain is today and the people who have done gd to you no matter what.
                    <br>
                    Being contented in the present does not mean that a person will never thrive to reach his/her dreams and goals in the future. Contentment means being happy and grateful with what you have today. These are your wishes from the past. These are products of your hardwork.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/challenges3.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        {{-- <p class="p-style">
        </p> --}}
        <br> 
    </div>
</div>
<div class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-3 line-spacing text-center">
                The Sales Person's <br>Wealth Formula 
            </div>
            <div class="styled-sub-text-formula text-center">
                These problems can impact your wealth generation potential. Why is that so?
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-12 col-md-7">
                    <br> <br>
                    <div class="styled-text-sub-title-formula line-spacing mt-5">
                        <b> Health And Success Are Inter-Related.  </b>
                    </div>
                    <p class="p-style-formula">
                        Did you know that a research by the <a href="https://njaes.rutgers.edu/sshw/message/message.php?p=Finance&amp;m=190" target="_blank"> <span style="color: black;"><u>Rutgers Cooperative Extension Small Steps to Health and Wealth (SSHW)</u></span></a> shows that overweight and obesity are associated with lower earnings, particularly for women in professional occupations? Employers spend a lot in developing programs to help people maintain good health habits and provide clinical care for employees who might be ill to make them even more productive at work.
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Salesperson/wealth1.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Salesperson/wealth2.png') }}" alt="Your Image" class="img-fluid">
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
            <div class="row mt-2">
                <div class="col-12 col-md-7">
                    <div class="styled-text-sub-title-formula line-spacing mt-2">
                        <br> <br>
                        <b> 
                            People Who Are Good In Building Genuine Relationships Are Better At Wealth- Generation.
                        </b>
                    </div>
                    <p class="p-style-formula">
                        The Grant Study of the Harvard Medical School that people in loving relationship are more inclined to earn well and use their money in a wiser manner to build wealth quickly. It does not necessarily mean being in a romantic relationship. The study is very specific that the relationship may be with a parent, grandparents, children, or friends.
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Salesperson/wealth3.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <br>
            {{-- <div class="styled-text-sub-title-formula line-spacing mt-2 text-center">
                <b>
                    Trust Issues
                </b>
            </div> --}}
            <div class="styled-text-formula line-spacing mt-5 text-center" style="font-size: 2rem;">
                <b>
                    This is your power motivation formula in building your wealth as a Salesperson:
                </b>
            </div>

            <div class="mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="color: #AF846D; font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Network
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
            <div class="col-md-6">
                <p class="p-style-guide">
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Salesperson would eventually encounter in this lifetime.
                    <br>
                    <br>
                    Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.
                    <br>
                    <br>
                    These fears are reasonable. You want to build wealth in the shortest possible time. You want to watch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.
                    <br>
                    <br>
                    However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/guide1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br>
        <div class="styled-text-guide line-spacing mt-1 text-center">
            Here are the solutions catered just for a Salesperson like you:
        </div>

        <br>
        <div class="text-center">
            <div class="decorative-border-guide" style="background-color: #AF846D">
                <div class="styled-text-sub-title" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #1 Start Deepening Your Professional Relationships
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide mt-2">
            Chances are high that your colleagues are the one to be true on you and guide you to your path to career growth and success. There&rsquo;s nothing wrong with your self-confidence, you&rsquo;ve already got it! You can charm people naturally but for this time, focus on building stronger and&nbsp; &nbsp;quality
        </p>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="p-style-guide mt-2">
                    relationships. Focus on the quality, rather on pleasing and befriending every person you will meet in this lifetime.
					<strong><u>Why Professional Relationships?</u></strong>
					<br>
					Even Salesperson feel stressed and burned out from their jobs. Every people, even those who&nbsp; are very good at establishing connections can feel unmotivated at the workload brought by&nbsp; their chosen career. Establishing quality working relationships can ease this workload and make your job seemingly easier and enjoyable.
					<br>
					<strong><u>How To Deepen A Professional Relationship?</u></strong>
					<br>
					A healthy professional relationship requires maturity, respect, and mindfulness. The simple trick is to initiate the connection. Learn to reach out even if you don&rsquo;t need anything from them. Research what the other person has been doing so your casual conversations will be conversational yet meaningful. Offer something useful for them like a contact that might be helpful or just any resource related to what they are doing.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/guide2.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br> <br>
        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #2 Start Subscribing To Financial Newsletters And Listening To Financial Podcasts
                </b>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <p class="p-style-guide">
                    <br> 
                    Can&rsquo;t say no to friends who are always asking for money, directly and indirectly? Are you always compelled to spend on friends because &ldquo;it feels just right?&rdquo;
                    <br> <br>
                    Financial experts and bloggers can help you with that! They know simple hacks how to make these all easier. Financial blogs and books will teach you the right way to budget and to look at your salary from a different perspective. Many listeners and readers have already attested that this weekly habit changed them a lot.
                    <br> <br>
                    Most Salesperson are looking at their salaries based on today&rsquo;s circumstances - that their income stream is stable, that their business is far from going bankrupt, that their health and bank accounts are secured more than ever.
                    <br> <br>
                    Listening to financial podcasts will make you think of the future. Nobody had ever foreseen that this COVID pandemic will shut down a lot of business &ndash; even those which were at the top of the ladder. You can learn how to achieve this perspective from people who have experienced being in the same scenario.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/guide3.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br>
        <p class="p-style-guide">
            A weekly financial podcast / newsletter will highlight different aspects. Consider this as a kind of free coaching.
        </p>

        <br>
    
        <div class="row">
            <div class="col-12 col-md-8">
                <br> <br> <br>
                <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                    <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                        <b>
                            {{-- #3 Start A Steady Side Hustle --}}
                            #3 Start A Side Hustle
                        </b>
                    </div>
                </div>
                <p class="p-style-guide">
                    Here are the best low-cost side hustles for you and the average salary you can earn as a passive income:
                    <b>
                        <ul>
                            <li>Sell online courses (Minimum $50 per course)</li>
                            <li>Writing and content creation services (Minimum $10 per article for web content)</li>
                            <li>Blogger / Affiliate Marketer ($200/month for a beginner)</li>
                        </ul>
                    </b>
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Salesperson/guide4.png') }}" alt="Your Image" class="img-fluid" style="100%;">
            </div>
        </div>
    </div>
    
    <div class="container-deluxe">
        <a href="https://perpetualincome365.convertri.com/pre-registration" target="_blank" class="btn-deluxe-reading">Income Replacement Side-Hustle For <i>{{$title}}</i></a>
    </div>
</div> 
</div> 

@endsection