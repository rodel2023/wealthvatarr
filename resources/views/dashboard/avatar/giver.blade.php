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
                The Givers are the type of people who would not charge the full price when someone asks them to do a work. These people find it hard to talk about money, so they don’t want to elaborate about the costs, break down expenses, and allowances. What one is willing to give, that’s what they receive. But Givers do this because of their eagerness to help people. They do it mostly because they think people need it the most. They are devoted to lend a hand and provide everything they can provide to those who come for their aid. For most people they have helped, the Givers are their Superheroes.
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
        </p>

        <div class="row">
            <div class="col-12 col-md-7">
                <p class="p-style">
                    <br> 
                    As THE GIVER, here are the superpowers which you can focus on to build your first wealth base:
                </p>
                <br> <br> <br> 
                <div class="decorative-border text-center mt-5">
                    <span class="span-box">SUPERPOWERS #1</span>
                    <div class="styled-text-sub-title line-spacing">
                        Naturally Compassionate
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Givers are the most enthusiastic people in helping others. They feel like they owe the world big time, and they can compensate it by giving their very best in lending a hand. Givers feel satisfaction and peace of mind when they see other people&rsquo;s problems ease a little because of them.
                </p>

                <br> <br>
                <img src="{{ asset('assets/img/dashboard/The Giver/superpower2.png') }}" alt="Your Image" class="img-fluid">

            </div>
            <div class="col-12 col-md-5">
                <br>
                <img src="{{ asset('assets/img/dashboard/The Giver/superpower1.png') }}" alt="Your Image" class="img-fluid">
                <br> <br>
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #2</span>
                    <div class="styled-text-sub-title">
                        Ready To Take Action
                    </div>
                </div>
                <br>
                <p class="p-style">
                    This springs from a Giver&rsquo;s natural parental instinct &ndash; they are ready to take action to alleviate the suffering of any person. This is a very good trait because they are the best team players who are always willing to take responsibility from the unwilling team members. Bosses are grateful for them for the enthusiasm and hope they bring to the group.
                    <br>
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-6">
                <br> <br> <br> <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #3</span>
                    <div class="styled-text-sub-title line-spacing">
                        Equipped With A Problem-Solving Mind
                    </div>
                </div>
                    <p class="p-style">
                        Givers are usually the first person that those with problem run to. A giver&rsquo;s mind seems to be always full of solutions, which make them desirable to big companies and government agencies. They know how to listen and give a new perspective to a problem.
                    </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Giver/superpower3.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Giver/superpower4.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <br> <br> <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #4</span>
                    <div class="styled-text-sub-title">
                        Forgive Easily
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    A Giver rarely harbors ill feelings. They&rsquo;d rather forgive, than think of the revenge and hatred all day. As much as they can, Givers would ignore people who do wrong unto them. They would rather keep the hatred, than unleash it on the other person. This is both a strength and weakness &ndash; it&rsquo;s a strength because hate consumes a lot of energy and can tilt your balance greatly to affect everything in your life.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <br> <br> <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #5</span>
                    <div class="styled-text-sub-title">
                        They Are Very Good Conversationalist
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    Givers always listen and never disregard opinions of others. They value transparency and courtesy. You would always feel comfortable with a Giver.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Giver/superpower5.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
    </div>
</div>

{{-- Weakness --}}
<div class="container-weaknesses">
    <div class="container">
        <h1 class="styled-text-title mt-4" style="color: #6D4B34;"><b>{{ $title }}</b></h1>
        <p class="styled-text decorative-border-weak" style="color: #6D4B34;">WEAKNESSES</p>
        <br>
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Giver/weakness1.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        They Are Always <br>Taken Advantage Of 
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Givers would often feel guilty when they say &ldquo;No&rdquo; to the point that they trust on the goodness of people so much. They experience an indescribable guilt when they don&rsquo;t serve other people first, thus, leading them to think of themselves the last. 
                    <br>
                    They are always the victims of fraud and scams. The scammers know the right way to do it, hassle-free: they use emotions to gain the Giver&rsquo;s sympathy.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <br> 
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        Some Hate Are Hard To Let Go
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Not all hate and shortcomings of other people, even if it be your friend or not, are easy to be forgiven and forgotten. A Giver is very good at bottling up their emotions. They find it hard to confront, because their emotions and compassionate traits tell them to do the opposite. 
                    <br> 
                    They do not feel comfortable in confronting those who wronged them, so they&rsquo;d rather keep it. However, bottling up your emotions will result to anxiety, panic attacks and potential mental health issues.
                </p>
            </div>
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Giver/weakness2.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Giver/weakness3.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 text-center">
            <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        They Are Fond Of Giving Money To The Point Of Compromising Their Financial Stability
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    A Giver&rsquo;s financial stability is a big question mark. Most of them incur debt just to give to people. If a Giver is out of other options to help those in need, they would resort to giving huge amounts of money to compensate their lack of other practical options. 
                    <br> 
                    Lack of financial stability includes accumulating debts, inability to finance their basic needs (a house and a car), lack of a retirement plan, and lack of emergency funds.
                </p>
            </div>
        </div>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-challeges"><b>A GIVER</b></h1>
        <p class="p-style-challenges">
            A generous person willing to take responsibilities and actions, without compromising him/herself determination is a magic formula to instantly build your wealth. However, there are a lot of possible problems you are most possible to encounter.
        </p>

        <p class="p-style-challenges">
            Let&rsquo;s start.
        </p>

        <ol class="p-style-challenges">
            <li>Your Mental Health Is Compromised</li>
            <li>You Let Your Emotions Decide For You</li>
            <li>Believing In Good Karma Is Not Enough</li>
        </ol>
        <br> 
        <div class="decorative-border text-center">
            <span class="span-box" style="color: #000000">CHALLENGE #1</span>
            <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                Recognizing Your Emotions Will Allow You To Regain Control In Your Life
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Giver/challenges1.png') }}" alt="Your Image" class="img-fluid mt-2">
            </div>
            <div class="col-12 col-md-6">
                <br>
                <p class="p-style">
                    A Giver is always swayed by emotions. You avoid confrontation and take responsibilities not because you can do it, but because you feel pity on the person the burden falls into. By doing this, you tend to listen to other people&rsquo;s plea and disregard your own needs.
                    <br> 
                    Bottling up your feelings can do more damage to your mental health. Moreover, you allow other people to take advantage of you, especially when it comes to money and finances.
                    It can be the root of small fights and backstabbing &ndash; to the point that you yourself would wonder where you went wrong.
                    <br> 
                    All these scenario point out to only one thing: that other people can control you by appealing to your emotions and sympathy.  Your friends are surely lauding your benevolence and compassionate being. However, the first step for a Giver when it comes to wealth-building is to regain control of their emotions first.  Did you know that studies show that sad people tend to do splurge shopping all the time? 
                    <br>
                </p>
            </div>
        </div>
        <p class="p-style">
            Sad people are also the impatient ones, which are the same people who usually fall to the get-rich- quick schemes.
            This is an example that losing control over your emotions can ruin your savings and healthy money habits.
            The same goes to an overly compassionate person. Providing them with financial help should only be enough without doing damage on you. Providing too much can teach them to be overly dependent.
        </p>
        <br> 
        <div class="row">
            <div class="col-12 col-md-6">
            <div class="decorative-border mt-5 text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Believing In Good Karma Should Fuel Your Subconscious
                </div>
            </div>
                <p class="p-style">
                    <br>
                    Without work, pure belief in good luck will result to nothing. Let your beliefs be embedded in your subconscious and affect your habits. Beliefs are input and to put it into reality, you need to act on it. Without the actions, they will be mere thoughts and ideas.
                    <br> <br>
                    In wealth generation, actions are very much needed. Money does not fall from the sky. Relying that the goodness you do to others will come back to you tentimes fold is not in the wealth formula. 
                    <br> <br>
                    Belief brings out healthy practices Actions bring results.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Giver/challenges2.png') }}" alt="Your Image" class="img-fluid mt-2">
            </div>
        </div>
    </div>
</div>
<div class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-3 line-spacing text-center">
                The Giver's <br>Wealth Formula 
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
                    <img src="{{ asset('assets/img/dashboard/The Giver/wealth1.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Giver/wealth2.png') }}" alt="Your Image" class="img-fluid">
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
							Financial Literacy Is The First Step Towards Wealth Generation
                        </b>
                    </div>
                    <p class="p-style-formula">
                        The ever-changing world heavily affects the financial sector. Investments change their structure and fraudsters are becoming smarter to scam even the wisest rich. The best leaders and wise decision makers are financial literates. They know the basic accounting terms and how money works. Lack of financial literacy have the following consequences:
                    </p>
                    <ul class="p-style-formula">
                        <li>Lack of retirement fund</li>
                        <li>Piling debts</li>
                        <li>Lack of financial stability</li>
                        <li>Inability to meet the expenses</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Giver/wealth3.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/img/dashboard/The Giver/wealth4.png') }}" alt="Your Image" class="img-fluid">
                </div>
                <div class="col-12 col-md-8">
                    <br> <br> <br> <br>
                    <div class="styled-text-sub-title-formula line-spacing mt-5">
                        <b> 
                            Debt-Free Individuals Are Happier And More Contented
                        </b>
                    </div>
                    <p class="p-style-formula">
                        The thought that all your hard earned income will be yours only is already comforting. Debt and interests pertaining to it can deplete your savings. People who are living debt-free or close to being debt-free never have to worry about their financial obligations.
                    </p>
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
                    This is your power motivation formula in building your wealth as a Giver:
                </b>
            </div>

            <div class="mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="color: #AF846D; font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Creating More Opportunities + Financial Literacy
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
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Giver would eventually encounter in this lifetime.
                    <br>
                    <br>
                    Your obsession with money is understandable. No one wants to compromise their financial stability and choose material happiness which are usually just temporary contentment.
                    <br>
                    <br>
                    These fears are reasonable. You want to build wealth in the shortest possible time. You want to watch your savings grow instead of it diminishing over temporary happiness; hence, you would rather save all the money that you think is not really necessary in your day-to-day sustenance.
                    <br>
                    <br>
                    However, these wants can sometimes be thought as motivation for you to perform well in your day job, get promotions, or think of a new business concept that can be the next big thing. 
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Giver/guide1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-guide">
            It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.
        </p>
        <br>
        <div class="styled-text-guide line-spacing mt-1 text-center">
            Here are the solutions catered just for a Giver like you:
        </div>

        <br>

        <div class="text-center">
            <div class="decorative-border-guide" style="background-color: #AF846D">
                <div class="styled-text-sub-title" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #1 Create A Financial Plan
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide mt-2">
            Without a financial plan, you don&#39;t have control over your money and cash flows. Without a budget every week (or every month), you are spending all your income and even more than what you earn. You give and spend because you think you still have more when in fact, your debts are already piling.
            <br>
            <br>
            The first step for a giver to generate wealth is by recognizing his finances and funds.
        </p>
        <div class="row">
            <div class="col-12 col-md-6">
                <ul class="p-style-guide">
                    <li>List down your monthly (or weekly) expenses for necessities</li>
                    <li>Account all your cash flows</li>
                    <li>Track your spending and categorize your expenses after the week</li>
                    <li>Calculate how much goes into your savings Do this for 4 consecutive weeks first.</li>
                </ul>

                <p class="p-style-guide">
                    Do this for 4 consecutive weeks first. 
                    <br> 
                    Then identify which category of expenses eats up your cash flows.
                    <br> <br>
                    Adjust the other factors to increase your savings.
                    <br>
                    <b> 50-30-20 Budget Rule </b>
                    <br> <br>
                    For people who are having a hard time tracking and budgeting their monthly income, they use the 50-30-20 rule.  
                    <b>
                    <br> <br>
                    50% of your income will go to your necessities
                    <br>
                    30% will go to wants
                    <br>
                    20% will go to savings, debts, and investments
                    </b>
                </p>
            </div>
            <div class="col-12 col-md-6">
                <br> <br>
                <img src="{{ asset('assets/img/dashboard/The Giver/guide2.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <p class="p-style-guide">
            <br>
            The key here is to categorize your expenses to have further control of your savings and for you to know which of the expenses need to be trimmed down.
        </p>
        <br> 
        <div class="text-center">
            <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #2 Monetize Your Action-Inducing Spirit
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide">
            A Giver has the best problem-solving skills. Their way of helping people is through their services, and money is the last option. Their minds are geared to think of solutions to help people who they think need help the most.
            <br>
            An Giver has got what it takes to start a for service-based businesses.
            <br>
        </p>
        <div class="row">
            <div class="col-12 col-md-5">
                {{-- this line --}}
                <p class="p-style-guide">
                    <b>
                        These are the top service-based niches for your best natural skills:
                    </b>
                </p>
                <ul>
                    <li>Life coaching</li>
                    <li>Personality Development Coaching</li>
                    <li>Systems Consultant</li>
                    <li>Virtual Assistant</li>
                    <li>Property Manager</li>
                    <li>Corporate Planner</li>
                    <li>Transport services</li>
                    <li>Errand services</li>
                    <li>Software that does digital services to clients</li>
                    <li>Mobile apps for entertainment</li>
                </ul>
                <p class="p-style-guide">
                    <b>
                        More general top-selling niches to get you started:
                    </b>
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
            <div class="col-12 col-md-7">
                <img src="{{ asset('assets/img/dashboard/The Giver/guide3.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <br>
        <div class="text-center">
            <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #3 Invest In Long-Term Investments
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide">
            When you have enough funds to invest, opt for long-term investments. This is perfect for a Giver, because this time, letting someone handle this aspect of your finances will do you more good. A professional fund manager will be the one to handle all these to give you peace of mind and to let you continue your advocacies.
            <br>
        </p>
        <div class="row">
            <div class="col-12 col-md-8">
                <br> 
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
                    <br> <br>
                    There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('assets/img/dashboard/The Giver/guide4.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
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

@endsection