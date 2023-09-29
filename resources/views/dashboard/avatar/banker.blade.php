{{-- @extends('layouts.premium') --}}
@extends('layouts.premium-avatar')
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

<div id="home" class="text-center" style="background-color: #D7C07C;">
    <img src="{{ asset('assets/img/dashboard/'.$title.'.png') }}" alt="Image" draggable="false" class="cta-image">
    <div class="text-center ps-3 ps-5 pe-5">
        <div class="container">
            <p class="p-style">
                The Bankers are the thriftiest people, yet they never go out of style. Your fellow Bankers within this group are some of the most trusted individuals you have met in your life. The kind of lifestyle that you are living now is exactly within your means. When certain arrangements change, the Bankers are the easiest to adapt to these changes. You have your own set of approaches and practices when it comes to your personal financial accounting and wealth generation. In short, you earn to save and see your money grow mainly from your day salary alone.
            </p>
        </div>
    </div>
	<br>
</div>

<div id="superpower" class="container-subheading">
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
            As THE BANKER, here are the superpowers which you can focus on to build your first wealth base:
        </p>

        <div class="row">
            <div class="col-12 col-md-5">
                <br>
                <img src="{{ asset('assets/img/dashboard/The Banker/superpower1-2.png') }}" alt="Your Image" class="img-fluid" style="height: 90%; width: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <br> 
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #1</span>
                    <div class="styled-text-sub-title line-spacing">
                        High Appreciation for Money
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Money is highly respected for a banker. Money is a product of one&rsquo;s sweat, sacrifices, and efforts. You value hardships so you make sure that every penny is well-accounted for.
                </p>
                <div class="decorative-border text-center mt-2">
                    <span class="span-box">SUPERPOWERS #2</span>
                    <div class="styled-text-sub-title">
                        Disciplined, Never Easily Swayed By Materiality
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Even if you have material wants, you rarely do splurge purchases because every expense must be planned. You make sure that you will earn back the amount you have used for this certain item. If you are tempted to buy a thing not really in your budget schedule, you think more than thrice before making the purchase.
                    <br>
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #3</span>
                    <div class="styled-text-sub-title line-spacing">
                        Highly Frugal
                    </div>
                </div>
                    <p class="p-style">
                        You have a lot of money-saving tips in mind. You have a lot of cash-back apps that you use to pay your bills. You would rather prepare home cooked meals than buying from fast foods and restaurants. Keep this superpower of yours &ndash; this will guide your path towards wealth creation!
                    </p>
                <div class="decorative-border mt-4 text-center">
                    <span class="span-box">SUPERPOWERS #4</span>
                    <div class="styled-text-sub-title">
                        You Practice Proper Financial Accounting
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Not a penny is wasted. Every dollar is well-accounted for. Not only that, your expenses are mostly necessities. You track most of your expenses. Keep this up! You are the last person to be taken advantage when it comes to money.
                </p>
                <div class="decorative-border mt-4 text-center">
                    <span class="span-box">SUPERPOWERS #5</span>
                    <div class="styled-text-sub-title">
                        You Live Within Your Means
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Your lifestyle is just right for your day job salary. You are never compelled or pressured to keep up with others.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Banker/superpower3-4-5.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('assets/img/dashboard/The Banker/superpower6.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <br> <br> <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box">SUPERPOWERS #6</span>
                    <div class="styled-text-sub-title">
                        You Pay Attention Even to Small Details 
                    </div>
                </div>
                <br>
                <br>
                <p class="p-style">
                    Frugality entails that you scrutinize your expenses very well &ndash; making sure that a certain thing you buy does its job well. After all, that&rsquo;s what you pay for. Work-wise, you pay high attention even to these small important details.
                </p>
            </div>
        </div>
        <br> 
    </div>
</div>

{{-- Weakness --}}
<div id="weaknesses" class="container-weaknesses">
    <div class="container">
        <div class="text-center">
            <h1 class="styled-text-title mt-4" style="color: #6D4B34;"><b>{{ $title }}</b></h1>
            <p class="styled-text decorative-border-weak" style="color: #6D4B34;">WEAKNESSES</p>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Banker/weakness1.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-12 col-md-7">
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #1</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Miss Out A Lot of Great Things That Money Can Buy
                    </div>
                </div>
                <br>
                <p class="p-style">
                    Whether we like it or not, there are really certain things in life that make us happy but in turn, we have to earn and but these stuff. In short, there are things and happiness that money can buy.
                    <br> <br>
                    Your trait to save money hinders you to feel that happiness associated with the greatest invention on Earth meant to provide the humankind happiness. We&rsquo;re talking about properties here &ndash; cars, condominium, high-end gadgets, elegant restaurants, and a luxurious lifestyle.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <br> <br> <br>
                <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #2</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You Are Obsessed With Money &ndash; A Physical Thing That Can Be Exchanged For Something More Important
                    </div>
                </div>
                <br>
                <p class="p-style">
                    For now, you are scared to let some of your hard-earned money to go with these &lsquo;expensive&rsquo; pleasures in life. You feel satisfied by seeing your money accumulate in your savings accounts. Keep in mind that money can also buy comfort, social relationships, and health, too. These are just some of the things that you are missing because of your money obsession.
                </p>
            </div>
            <div class="col-12 col-md-5 text-center">
                <img src="{{ asset('assets/img/dashboard/The Banker/weakness2.png') }}" alt="Your Image" class="img-fluid" style="height: 90%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Banker/weakness3.png') }}" alt="Your Image" class="img-fluid" style="height: 90%;">
            </div>
            <div class="col-12 col-md-6 text-center">
            <div class="decorative-border-weak mt-5 text-center">
                    <span class="span-box" style="color: #6D4B34;">WEAKNESSES #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #6D4B34;">
                        You are Stressed with The Idea of Spending a Lot Even In Necessary Purchases
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    Most people are stressed with money because it&rsquo;s not enough to meet their monthly expenses and necessities. But Bankers are stressed with the idea of their account balance diminishing because of their obsession with money itself. Bankers are scared of running out of money when an emergency occurs.
                    <br>
                    The last thing a Banker wants is to lose their financial independence.
                </p>
            </div>
        </div>
    </div> {{-- End of container --}}
</div>
<div id="challenges" class="container-wealth-challenges">
    <div class="container">
        <h1 class="styled-text-wealth"> WEALTH CHALLENGES OF</h1>
        <h1 class="styled-text-title-challeges"><b>A BANKER</b></h1>
        <p class="p-style-challenges">
            A frugal lifestyle is important in building your wealth quickly. However, there are a lot of possible problems you are most possible to encounter.
        </p>

        <p class="p-style-challenges">
            Let&rsquo;s start.
        </p>

        <ol class="p-style-challenges">
            <li>Your Mental Health Is Compromised</li>
            <li>You Have Something You Want To Do Or Achieve, Yet Money Is Stopping You </li>
            <li>You Have Troubles Building Genuine Relationships With Family, Friends, And Acquaintances </li>
            <li>Your Path To Financial Independence Is A Long Way To Go</li>
        </ol>
        <br> 
        <div class="text-center">
            <div class="decorative-border text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #1</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Money Is Worth the Health
                </div>
            </div>
            <br>
            <br>
                <p class="p-style">
                    Regular checkups and up-to-date vaccinations and screening tests can significantly prolong your life and possibly serious conditions can be treated early.
                    As a general rule, a person under the age of 50 should see a doctor for a routine physical checkup once every 3 years. A person over the age of 50 should go at least once a year. An average doctor visit costs between $70-$250.
                </p>
        </div>
        <br> 
        <div class="row">
            <div class="col-12 col-md-6">
            <div class="decorative-border mt-5 text-center">
                <span class="span-box" style="color: #000000">CHALLENGE #2</span>
                <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                    Money Can Buy Happiness and Relaxation
                </div>
            </div>
                <p class="p-style">
                    <br>
                    As a simple exercise, list down all your wants in life without thinking of the money. Close your eyes and enumerate all those luxuries you&rsquo;ve always wanted.
                    <br>
                    It could be a vacation in another country, owning a high-rise condominium place, a new high- end car, a membership in luxurious club, starting a collection of expensive stuff, etc.
                    <br>
                    Now, take into account the money.
                    <br>
                    Which of the following could you achieve by now?
                    <br>
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Banker/challenges2.png') }}" alt="Your Image" class="img-fluid mt-2">
            </div>
        </div>
        <p class="p-style">
            These are some of the material happiness that money can buy. A Banker usually encounter a hard time striking off these wants from their bucket list due to their obsession with money. This material happiness may also provide contentment and relaxation.
        </p>
        <br> 
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Banker/challenges3.png') }}" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <br> <br> <br> <br>
                <div class="decorative-border mt-5 text-center">
                    <span class="span-box" style="color: #000000">CHALLENGE #3</span>
                    <div class="styled-text-sub-title line-spacing" style="color: #423F32">
                        Social Gatherings May Require You to Spend Money
                    </div>
                </div>
                <br> <br>
                <p class="p-style">
                    Even a simple get-together entails spending a little. A Banker finds it hard to have quality time with friends and family, because in reality, it&rsquo;s associated with spending which means additional expenses.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="formula"  class="container-formula" style="background-color: white;">
    <div class="cta-image-formula">
        {{-- <img src="{{ asset('assets/img/dashboard/Work.png') }}" alt="Image" draggable="false" class="cta-image-formula"> --}}
            <div class="styled-text-title-formula mt-3 line-spacing text-center">
                The Banker's <br>Wealth Formula 
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
                    <img src="{{ asset('assets/img/dashboard/The Banker/wealth1.png') }}" alt="Your Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="{{ asset('assets/img/dashboard/The Banker/wealth2.png') }}" alt="Your Image" class="img-fluid">
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
                    <img src="{{ asset('assets/img/dashboard/The Banker/wealth3.png') }}" alt="Your Image" class="img-fluid">
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
                    This is your power motivation formula in building your wealth as a Banker:
                </b>
            </div>

            <div class="mt-2 text-center">
                <b>
                    <br>
                    <span class="line-spacing" style="color: #AF846D; font-family: Lucida Handwriting; font-size: 3rem;">
                        Health + Happiness + Relationships
                    </span>
                </b>
            </div>
        <br> 
    </div>
</div>
{{-- Wealth Guide --}}
<div id="guide" class="container-wealth-guide">
    <div class="container">
        <div class="text-center">
            <h1 class="styled-text-title mt-5 mb-0" style="color: #6D4B34;"><u>{{$title}}</u></h1>
            <h1 class="styled-text-title-formula mt-0">Wealth Guide</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="p-style-guide">
                    It&rsquo;s not too late yet to remedy your negative vibrations (weaknesses) to counter the possible problems that a natural Banker would eventually encounter in this lifetime.
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
                <img src="{{ asset('assets/img/dashboard/The Banker/guide1.png') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <p class="p-style-guide">
            It&rsquo;s possible that these wants not take up your savings funds, for you can let your money do the work for you.
        </p>
        <br>
        <div class="styled-text-guide line-spacing mt-1 text-center">
            Here are the solutions catered just for a Banker like you:
        </div>

        <br>
        <div class="text-center">
            <div class="decorative-border-guide" style="background-color: #AF846D">
                <div class="styled-text-sub-title" style="margn-bottom: 0; color: #6D4B34">
                    <b>
                        #1 Start Investing In Short-Term Investments
                    </b>
                </div>
            </div>
        </div>
        <p class="p-style-guide mt-2">
            Letting your money sit in the bank is good. After all it still earns interest in your savings account. However, that alone as an investment will not realistically provide enough money to fund these wants of yours.
        </p>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="p-style-guide mt-2">
					<strong>Why Short-Term Investments?  </strong> 
                </p>
                <ul class="p-style-guide">
                    <li>It&rsquo;s beginner-friendly. Investors now earning 7-figures from their diverse portfolio started with short-term investments. </li>
                    <li>It is associated with lower risk. Short-term investments can be converted into cash within 5 years. </li>
                </ul>
                <p class="p-style-guide mt-2">
					<strong>What Are The Best Short-Term Investments?</strong> 
                </p>
                <ul class="p-style-guide">
                    <li>Savings Accounts </li>
                    <li>Money Market Account </li>
                    <li>Short-Term Bond Funds </li>
                    <li>Bank Certificates of Deposits </li>
                    <li>Peer-to-peer Loans</li>
                </ul>
                <p class="p-style-guide">
                    <strong>Where To Avail?</strong> 
                </p>

                <ul class="p-style-guide">
                    <li>Banks in your locality offer short-term investments. Most of them would offer to do the work for you such as enrolling your funds into different short-term funds and assets you prefer.&nbsp;</li>
                </ul>
                {{-- this line --}}
                <div class="decorative-border-guide text-center" style="background-color: #AF846D">
                    <div class="styled-text-sub-title line-spacing" style="margn-bottom: 0; color: #6D4B34">
                        <b>
                            #2 When You Are Able To Take It To The Next Level, Invest In Long-Term Ones
                        </b>
                    </div>
                </div>
                <p class="p-style-guide">
                    When you have enough funds to invest, opt for long-term investments.  This is perfect for a Banker, because this time, letting someone handle this aspect of your finances will do you more good. A professional fund manager will be the one to handle all these to give you peace of mind and to let you continue your advocacies.
                    <br>
                    <strong>Why Long-Term Investments?</strong>
                </p>
                <ul>
                    <li>Less time-consuming. You won&rsquo;t need to be bothered by the fluctuations of the value of the asset. </li>
                    <li>Higher returns of investment. </li>
                </ul>
                <p class="p-style-guide">
                    <strong>What Are The Best Long-Term Investments?</strong>
                </p>
                <ul>
                    <li>Stocks </li>
                    <li>Corporate and Treasury Bonds </li>
                    <li>Mutual Funds </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/img/dashboard/The Banker/guide2-3.png') }}" alt="Your Image" class="img-fluid" style="height: 100%;">
            </div>
        </div>
                <p class="p-style-guide">
					<strong>Where To Avail?</strong>
					<br>
					Mutual Funds are offered by banks as well. As your local bank about their own investment fund managed by experts that are expected to yield huge returns after sometime. The good thing about this is that you don&rsquo;t need to learn the in-depths of stock trading because the experts will handle it for you. Unit Investment Trust or mutual funds managed by some retail banks require a minimum investment of $500.
					<br>
					There are also online brokers and trading platforms which offer $0 fees and no minimum amount. You would only need to deposit such amount enough to buy a minimum number of stocks in your preferred company.
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
                    Here are the best low-cost side hustles for a Banker to fit on his or her expertise::
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
                <img src="{{ asset('assets/img/dashboard/The Banker/guide4.png') }}" alt="Your Image" class="img-fluid" style="100%;">
            </div>
        </div>
    </div>
    
    <div class="container-deluxe">
        <a href="https://perpetualincome365.convertri.com/pre-registration" target="_blank" class="btn-deluxe-reading">Income Replacement Side-Hustle For <i>{{$title}}</i></a>
    </div>

</div>
</div> {{-- end of the content --}}
@endsection