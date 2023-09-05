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
	{{-- <h2 class="styled-text pt-4">WHAT MAKES YOU</h2> --}}
		{{-- <img src="{{ asset('assets/img/'.$title.'.png') }}" alt="Image" style="height: 130px; margin-right: 25%;"> --}}
    {{-- <h1 class="styled-text-title">{{ $title }}</h1> --}}
    <img src="{{ asset('assets/img/dashboard/Home.png') }}" alt="Image" draggable="false" class="cta-image">
    <div class="text-center ps-3 ps-5 pe-5">
    <p class="p-style">
        The Givers are the type of people who would not charge the full price when someone asks them to do a work. These people find it hard to talk about money, so they don’t want to elaborate about the costs, break down expenses, and allowances. What one is willing to give, that’s what they receive. But Givers do this because of their eagerness to help people. They do it mostly because they think people need it the most. They are devoted to lend a hand and provide everything they can provide to those who come for their aid. For most people they have helped, the Givers are their Superheroes.
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
            Good question. Let&rsquo;s start with knowing the importance of superpowers and strengths.
            <br>
            First of all, research has already shown that there are certain qualities that ancient humans have evolved overtime to resist extreme weather and endure stress. These amazing traits are what made humans stand the attack of nature and made them thrive in extreme situations.
            <br>
            Research further concluded that these skills and abilities can still be further developed according to one&rsquo;s limits.
            <br>
            The same goes to one&rsquo;s inner traits.
            <br>
            One&rsquo;s superpowers are said to be the easiest ones to develop further &ndash; and these developed superpowers would be your fastest way to grow your wealth and cultivate a success mindset.
            <br>
            <strong>As THE GIVER, here are the superpowers which you can focus on to build your first wealth base:</strong>
        </p>
        <br>

        <div class="row">
            <div class="col-9">
            <div class="decorative-border text-center">
                <span class="span-box">SUPERPOWERS #1</span>
                <div class="styled-text-super">
                    Naturally Compassionate
                </div>
            </div>
            <br>
            <br>
            <p class="p-style">
                Givers are the most enthusiastic people in helping others. They feel like they owe the world big time, and they can compensate it by giving their very best in lending a hand. Givers feel satisfaction and peace of mind when they see other people&rsquo;s problems ease a little because of them.
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
                    Ready To Take Action
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    This springs from a Giver&rsquo;s natural parental instinct &ndash; they are ready to take action to alleviate the suffering of any person. This is a very good trait because they are the best team players who are always willing to take responsibility from the unwilling team members. Bosses are grateful for them for the enthusiasm and hope they bring to the group.

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
                    Equipped With A Problem-Solving Mind
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Givers are usually the first person that those with problem run to. A giver&rsquo;s mind seems to be always full of solutions, which make them desirable to big companies and government agencies. They know how to listen and give a new perspective to a problem.
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
                    Forgive Easily
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    A Giver rarely harbors ill feelings. They&rsquo;d rather forgive, than think of the revenge and hatred all day. As much as they can, Givers would ignore people who do wrong unto them. They would rather keep the hatred, than unleash it on the other person. This is both a strength and weakness &ndash; it&rsquo;s a strength because hate consumes a lot of energy and can tilt your balance greatly to affect everything in your life.
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
                    They Are Very Good Conversationalist
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Givers always listen and never disregard opinions of others. They value transparency and courtesy. You would always feel comfortable with a Giver.
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
                        They Are Always Taken Advantage Of 
                    </div>
                </div>
            </div>
        </div>
        <br>
            <p class="p-style">
                Givers would often feel guilty when they say &ldquo;No&rdquo; to the point that they trust on the goodness of people so much. They experience an indescribable guilt when they don&rsquo;t serve other people first, thus, leading them to think of themselves the last. They are always the victims of fraud and scams. The scammers know the right way to do it, hassle-free: they use emotions to gain the Giver&rsquo;s sympathy.
            </p>
        <br>
        <div class="row">
            <div class="col-9 text-center">
                <br> <br>
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-super line-spacing" style="color: #6D4B34;">
                        Some Hate Are Hard To Let Go
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
            <p class="p-style">
                Not all hate and shortcomings of other people, even if it be your friend or not, are easy to be forgiven and forgotten. A Giver is very good at bottling up their emotions. They find it hard to confront, because their emotions and compassionate traits tell them to do the opposite. <br> They do not feel comfortable in confronting those who wronged them, so they&rsquo;d rather keep it. However, bottling up your emotions will result to anxiety, panic attacks and potential mental health issues.
            </p>
        <br>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 text-center">
                <br> <br>
                <div class="decorative-border-weak text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-super line-spacing" style="color: #6D4B34;">
                        They Are Fond Of Giving Money To The Point Of Compromising Their Financial Stability
                    </div>
                </div>
                <p class="p-style">
                    A Giver&rsquo;s financial stability is a big question mark. Most of them incur debt just to give to people. If a Giver is out of other options to help those in need, they would resort to giving huge amounts of money to compensate their lack of other practical options. <br> Lack of financial stability includes accumulating debts, inability to finance their basic needs (a house and a car), lack of a retirement plan, and lack of emergency funds.
                </p>
            </div>
        </div>
        <br> <br> <br> <br> <br>
    </div> {{-- End of container --}}
</div>
<div class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-wealth">A GIVER</h1>

        <p class="styled-sub-text">
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
        <br> <br> <br>
        <div class="row">
            <div class="col-8">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #1</span>
                <div class="styled-text-super line-spacing" style="color: #423F32">
                    Recognizing Your Emotions Will Allow You To Regain Control In Your Life
                </div>
            </div>
            <br>
            <br>
                <p class="p-style-challenges">
                    A Giver is always swayed by emotions. You avoid confrontation and take responsibilities not because you can do it, but because you feel pity on the person the burden falls into. By doing this, you tend to listen to other people&rsquo;s plea and disregard your own needs.
                    <br>
                    Bottling up your feelings can do more damage to your mental health. Moreover, you allow other people to take advantage of you, especially when it comes to money and finances. It can be the root of small fights and backstabbing &ndash; to the point that you yourself would wonder where you went wrong.
                    <br>
                    All these scenario point out to only one thing: that other people can control you by appealing to your emotions and sympathy.
                    <br>
                    Your friends are surely lauding your benevolence and compassionate being. However, the first step for a Giver when it comes to wealth-building is to regain control of their emotions first.
                    <br>
                    Did you know that studies show that sad people tend to do splurge shopping all the time? Sad people are also the impatient ones, which are the same people who usually fall to the get-rich- quick schemes.
                    <br>
                    This is an example that losing control over your emotions can ruin your savings and healthy money habits.
                    <br>
                    The same goes to an overly compassionate person. Providing them with financial help should only be enough without doing damage on you. Providing too much can teach them to be overly dependent.
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
                    Believing In Good Karma Should Fuel Your Subconscious
                </div>
            </div>
            <br>
            <br>
                <p class="p-style-challenges">
                    Without work, pure belief in good luck will result to nothing. Let your beliefs be embedded in your subconscious and affect your habits. Beliefs are input and to put it into reality, you need to act on it. Without the actions, they will be mere thoughts and ideas.
                    <br>
                    In wealth generation, actions are very much needed. Money does not fall from the sky. Relying that the goodness you do to others will come back to you tentimes fold is not in the wealth formula. Belief brings out healthy practices Actions bring results.
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
                THE GIVER'S WEALTH FORMULA
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
							Financial Literacy Is The First Step Towards Wealth Generation
                        </b>
                    </div>
                <div class="styled-text-formula mt-2">
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
                </div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="styled-text-sub-formula line-spacing mt-2 text-center">
                <b>
                    Debt-Free Individuals Are Happier And More Contented
                </b>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-7">
                    <div class="styled-text-formula mt-1">
                        <p class="p-style-formula">
                            The thought that all your hard earned income will be yours only is already comforting. Debt and interests pertaining to it can deplete your savings. People who are living debt-free or close to being debt-free never have to worry about their financial obligations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="styled-text-sub-formula line-spacing mt-2 text-center">
                <b>
                    Trust Issues
                </b>
            </div>
            <div class="styled-text-formula line-spacing mt-2 text-center" style="font-size: 2rem;">
                <b>
                    This is your power motivation formula in building your wealth as a Giver:
                </b>
            </div>

            <div class="styled-text-formula mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="font-family: Lucida Handwriting; font-size: 3rem;">
                        Self + Creating More Opportunities + Financial Literacy
                    </span>
                    <br>
                    And For Your Ultimate Secret to Wealth-Generation:
                    <br>
                    Creating More Opportunities
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
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Giver would eventually encounter in this lifetime.
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
            Here are the solutions catered just for a Giver like you:
        </div>

        <br>
        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-super" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #1 Create A Financial Plan
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            Without a financial plan, you don&#39;t have control over your money and cash flows. Without a budget every week (or every month), you are spending all your income and even more than what you earn. You give and spend because you think you still have more when in fact, your debts are already piling.
            <br>
        </p>


        <p class="p-style-guide">
            <strong>The first step for a giver to generate wealth is by recognizing his finances and funds.</strong>
        </p>
        <ul class="p-style-guide">
            <li>List down your monthly (or weekly) expenses for necessities</li>
            <li>Account all your cash flows</li>
            <li>Track your spending and categorize your expenses after the week</li>
            <li>Calculate how much goes into your savings Do this for 4 consecutive weeks first.</li>
        </ul>

        <p class="p-style-guide">Then identify which category of expenses eats up your cash flows. Adjust the other factors to increase your savings.
            <br>
            <strong>50-30-20 Budget Rule</strong>
            <br>
            For people who are having a hard time tracking and budgeting their monthly income, they use the 50-30-20 rule.
            <br>
            <strong>50% of your income will go to your necessities 30% will go to wants</strong>
            <br>
            <strong>20% will go to savings, debts, and investments</strong>
            <br>
            The key here is to categorize your expenses to have further control of your savings and for you to know which of the expenses need to be trimmed down.
        </p>

        <div class="decorative-border-guide text-center" style="background-color: #AF846D">
            <div class="styled-text-super line-spacing" style="margn-bottom: 0; color: #6D4B34">
                <b>
                    #2 Monetize Your Action-Inducing Spirit
                </b>
            </div>
        </div>

        <p class="p-style-guide">
            A Giver has the best problem-solving skills. Their way of helping people is through their services, and money is the last option. Their minds are geared to think of solutions to help people who they think need help the most.
            <br>
            <br>
            <strong>An Giver has got what it takes to start a for service-based businesses. These are the top service-based niches for your best natural skills:</strong>
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

        <p class="p-style-guide"><strong>More general top-selling niches to get you started:</strong></p>

        <ul>
            <li>Clothing and fashion items</li>
            <li>Fitness Equipment</li>
            <li>Gadgets And Technology</li>
            <li>Home Improvement And D&eacute;cor</li>
            <li>Health-Conscious Foods</li>
            <li>Pet Supplies</li>
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