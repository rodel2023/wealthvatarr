<?php
$urlParamValueName = $_GET['name'];
$urlParamValueEmail = $_GET['mail'];
$avatar = $_GET['avatar'];

?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <title>WealthAvatar.com | Loading</title>



  <!-- Styles -->

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="../assets/img/image/favicon.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link type='text/css' rel='stylesheet' href='../../../assets/css/style.css?v=1.2'>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- jQuery library -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style>
		
  input[name="submitButton"] {
    display: none;
  }
    body,

    .loading-container {

      /* background: #e1d9e3; */
      background: #D7C07C;

    }



    i {

      font-family: 'FontAwesome';

      font-style: normal;

    }



    .header {

      font-size: 2em;

      font-weight: 900

    }



    .indi-logo {

      filter: none

      

    }



    .indi-logo img {

      width: 100%;

      max-width: 200px

    }



    .drop {

      color: #444;

      font-weight: 700;

      text-transform: none;

      text-shadow: none;

      font-size: 1.5em

    }



    #countdown {

      font-size: 1.2em;

      text-shadow: none

    }



    .purple {

    color:rgb(128,0,128);

    }

    .pink {

        color:rgb(255,20,147);

    }

    .start-reading {

      width: 100%;

      max-width: 300px;

      color: #fff;

      text-transform: uppercase;

      letter-spacing: 3px;

      /* background: rgb(128,0,128); */
      background: #9F8B4A;

      box-shadow: 0 5px 15px rgba(0, 0, 0, .15);

      color: #fff !important;

      font-weight: 700;

      padding: 15px 32px;

      text-decoration: none;

      display: block;

      font-size: 1em;

      margin: 0 auto;

      clear: both;

      border-radius: 100px;

      width: 100%;

      cursor: pointer;

      text-align: center;

    }



    .start-reading:hover {

      transition: 0.5s;

      /* background: rgb(255,20,147); */
      background: #A98F18;

      color: #222;

      text-decoration: none;

      text-decoration: none;

    }



    .dontclose {

      font-weight: 700;

      text-transform: uppercase;

      letter-spacing: 2px;

      color: red

    }



    .header {

      color: #333

    }



    .loading-p {

      color: #666

    }



    @media only screen and (max-width:768px) {

      .header {

        font-size: 1.5em

      }



      .drop {

        font-size: 1.2em;

      }



      #countdown {

        font-size: 1em

      }

    }



    /* Loading CSS */

    .lds-ellipsis {

      display: inline-block;

      position: relative;

      width: 64px;

      height: 64px

    }



    .lds-ellipsis div {

      position: absolute;

      top: 27px;

      width: 11px;

      height: 11px;

      border-radius: 50%;

      background: #a83893;

      animation-timing-function: cubic-bezier(0, 1, 1, 0)

    }



    .lds-ellipsis div:nth-child(1) {

      left: 6px;

      animation: lds-ellipsis1 .6s infinite

    }



    .lds-ellipsis div:nth-child(2) {

      left: 6px;

      animation: lds-ellipsis2 .6s infinite

    }



    .lds-ellipsis div:nth-child(3) {

      left: 26px;

      animation: lds-ellipsis2 .6s infinite

    }



    .lds-ellipsis div:nth-child(4) {

      left: 45px;

      animation: lds-ellipsis3 .6s infinite

    }



    @keyframes lds-ellipsis1 {

      0% {

        transform: scale(0)

      }



      100% {

        transform: scale(1)

      }

    }



    @keyframes lds-ellipsis3 {

      0% {

        transform: scale(1)

      }



      100% {

        transform: scale(0)

      }

    }



    @keyframes lds-ellipsis2 {

      0% {

        transform: translate(0, 0)

      }



      100% {

        transform: translate(19px, 0)

      }

    }

  </style>



  <!-- Google Tag Manager -->

  <script defer>

    (function(w, d, s, l, i) {

      w[l] = w[l] || [];

      w[l].push({

        'gtm.start': new Date().getTime(),

        event: 'gtm.js'

      });

      var f = d.getElementsByTagName(s)[0],

        j = d.createElement(s),

        dl = l != 'dataLayer' ? '&l=' + l : '';

      j.async = true;

      j.src =

        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;

      f.parentNode.insertBefore(j, f);

    })(window, document, 'script', 'dataLayer', 'GTM-TGKFM45');

  </script>

  <!-- End Google Tag Manager -->

</head>



<style>

  .wrap {

    width: 220px;

    margin: auto;

    position: relative;

    height: 220px;

  }



  .circle {

    width: 200px;

    height: 200px;

    border: 2px solid rgb(128,0,128);

    border-radius: 50%;

    position: absolute;

    left: 0;

    top: 0;

    right: 0;

    bottom: 0;

    margin: auto;

    animation: rotateimg 20s linear infinite;

  }



  .square {

    width: 130px;

    height: 130px;

    border: 1px solid rgb(255,20,147);

    top: 0;

    right: 0;

    bottom: 0;

    left: 0;

    position: absolute;

    margin: auto;

    animation: rotatealt1 10s linear infinite;

  }



  .squarealt {

    width: 130px;

    height: 130px;

    border: 1px solid #f96fe9;

    top: 0;

    right: 0;

    bottom: 0;

    left: 0;

    position: absolute;

    margin: auto;

    transform: rotate(45deg);

    animation: rotatealt2 15s linear infinite;

  }



  .squarealt2 {

    width: 130px;

    height: 130px;

    border: 1px solid rgb(255, 60, 0);

    position: absolute;

    top: 0;

    bottom: 0;

    left: 0;

    right: 0;

    margin: auto;

    transform: rotate(30deg);

    animation: rotatealt3 20s linear infinite;

  }



  .archetype-icon {

    width: 100px;

    height: 100px;

    top: 0;

    bottom: 0;

    right: 0;

    left: 0;

    margin: auto;

    position: absolute;

    animation: rotateimg 5s linear infinite;

  }



  @keyframes rotatealt1 {

    0% {

      transform: rotate(0deg);

    }



    100% {

      transform: rotate(360deg);

    }

  }



  @keyframes rotatealt2 {

    0% {

      transform: rotate(45deg);

    }



    100% {

      transform: rotate(405deg);

    }

  }



  @keyframes rotatealt3 {

    0% {

      transform: rotate(30deg);

    }



    100% {

      transform: rotate(390deg);

    }

  }



  @keyframes rotateimg {

    0% {

      transform: rotateY(0deg);

    }



    100% {

      transform: rotateY(360deg);

    }

  }

</style>



<body>

    <?php
    
      class Form {
          private $name;
          private $email;
          private $archetype;
    
          public function __construct($name, $email, $archetype) {
              $this->name = $name;
              $this->email = $email;
              $this->archetype = $archetype;
    
              // database connection
              $servername = "127.0.0.1";
              $username = "digiyebl_wealthavatarr";
              $password = '74*$nTKZiZ9t';
              $dbname = "digiyebl_wealthavatarr";
              $this->conn = new mysqli($servername, $username, $password, $dbname);
    
              if ($this->conn->connect_error) {
                  die("Connection failed: " . $this->conn->connect_error);
              }
          }
    
          public function saveToDB() {
              $sql = "INSERT INTO user_archetype (name, email, archetype) VALUES ('$this->name', '$this->email', '$this->archetype')";
              if ($this->conn->query($sql) === TRUE) {
    
              } else {
                  echo "Error: " . $sql . "<br>" . $this->conn->error;
              }
    
              $this->conn->close();
          }
    
      }
    
      // Check if the form has been submitted
      if (isset($_GET["avatar"]) && isset($_GET["name"]) && isset($_GET["mail"])) {
    
          $name = $_GET["name"];
          $email = $_GET["mail"];
          $archetype = $_GET["avatar"];
        
          $form = new Form($name, $email, $archetype);
    
          // Save the form data to database
          $form->saveToDB();
      }
    
    ?>

  <div class="loading-container mt-3 mb-3">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 mx-auto">

          <div class="indi-logo text-center p-3">

			<!--<span class="purple"><h1><strong>Wealth</strong></span> <span class="pink">Avatarr</h1></span>-->
			<img class="img-fluid" src="../assets/img/image/wealth_avatarr.png">
          </div>

        </div>

      </div>

    </div>


<!-- AWeber Web Form Generator 3.0.1 -->

		<form id="customAweber" method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
		<div style="display: none;">
		<input type="hidden" name="meta_web_form_id" value="488999826" />
		<input type="hidden" name="meta_split_id" value="" />
		<input type="hidden" name="listname" value="awlist6557722" />
		<input type="hidden" name="redirect" value="https://www.aweber.com/thankyou.htm?m=default" id="redirect_1af31640d58493a66706b3bdc0df5aa1" />

		<input type="hidden" name="meta_adtracking" value="Wealth_Avatar_form" />
		<input type="hidden" name="meta_message" value="1" />
		<input type="hidden" name="meta_required" value="name,email" />

		<input type="hidden" name="meta_tooltip" value="" />
		</div>
		<div id="af-form-488999826" class="af-form"><div id="af-body-488999826" class="af-body af-standards">
		<div class="af-element">
		<!--label class="previewLabel" for="awf_field-116263728">Name:</label>-->
		<div class="af-textWrap">
		<input id="awf_field-116263728" type="hidden" name="name" class="text" value="<?php echo $urlParamValueName ?>" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
		</div>
		<div class="af-clear"></div>
		</div><div class="af-element">
		<!--<label class="previewLabel" for="awf_field-116263729">Email:</label>-->
		<div class="af-textWrap"><input class="text" id="awf_field-116263729" type="hidden" name="email" value="<?php echo $urlParamValueEmail ?>" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
		</div><div class="af-clear"></div>
		</div><div class="af-element buttonContainer">
		<input name="submitButton" class="submit" type="submit" value="Submit" tabindex="502" />
		<div class="af-clear"></div>
		</div>
		</div>
		</div>
		<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=LBwcnJycHExs" alt="" /></div>
		</form>

		<script type="text/javascript">
		
		<!--
		(function() {
		var IE = /*@cc_on!@*/false;
		if (!IE) { return; }
		if (document.compatMode && document.compatMode == 'BackCompat') {
		if (document.getElementById("af-form-488999826")) {
		document.getElementById("af-form-488999826").className = 'af-form af-quirksMode';
		}
		if (document.getElementById("af-body-488999826")) {
		document.getElementById("af-body-488999826").className = "af-body inline af-quirksMode";
		}
		if (document.getElementById("af-header-488999826")) {
		document.getElementById("af-header-488999826").className = "af-header af-quirksMode";
		}
		if (document.getElementById("af-footer-488999826")) {
		document.getElementById("af-footer-488999826").className = "af-footer af-quirksMode";
		}
		}
		})();
		-->
		</script>
		<script type="text/javascript">document.getElementById('redirect_1af31640d58493a66706b3bdc0df5aa1').value = document.location;</script>
    <div class="container text-center">

      <div class="row mt-3">

        <div class="col-sm-12 mx-auto">

        <h1 class="header" >
              Welcome <span class="name">My Dear</span>,
               Your Avatar Reading Is Starting
        </h1>
        
          <p class="dontclose">(Don't close this page!)</p>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-12 mx-auto">

          <p class="drop" id="yourAvatar">Your Avatar is the <span class="archetype" style="text-transform: capitalize;"></span></p>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-12 mx-auto">

          <div class="wrap">

              <!--icon script

            <img id="archetype-img" class="archetype-icon">-->

            <!-- <img src="../assets/img/image/adversarymiddle.png" class="archetype-icon"> -->
            <img src="../assets/img/results/<?=$avatar?>.png" class="archetype-icon">

            <div class="circle"></div>

            <div class="square"></div>

            <div class="squarealt"></div>

            <div class="squarealt2"></div>

          </div>

        </div>

      </div>



      <div class="row mb-3">

        <div class="col-sm-12 mx-auto">

          <h2 class="drop">Please wait while we redirect you to your Free <span class="archetype" style="text-transform: capitalize;"></span> Avatar Reading in <span id="countdown">5</span> seconds...</h2>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-12 mx-auto">

          <p class="loading-p">Click on the "Start Reading" button below to begin your reading immediately...</p>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-12 mx-auto">

          <a class="btn start-reading">Start Reading <i class="far fa-play-circle"></i></a>

        </div>

      </div>

    </div>
	
	
	

  </div>

  <script>
  
  window.onload = function() {
    // Check if a cookie indicating form submission exists
    var hasSubmitted = getCookie("formSubmitted");
    
    // If the cookie doesn't exist, or it's set to "false," submit the form
    if (!hasSubmitted || hasSubmitted !== "true") {
        document.getElementById('customAweber').submit();

        // Set a cookie to indicate that the form has been submitted, and make it expire in 1 minute
        setCookie("formSubmitted", "true", 1); // 1 minute
    }
};

// Function to set a cookie
function setCookie(name, value, minutes) {
    var date = new Date();
    date.setTime(date.getTime() + (minutes * 60 * 1000)); // Convert minutes to milliseconds
    var expires = "; expires=" + date.toUTCString();
    document.cookie = name + "=" + value + expires + "; path=/";
}

// Function to get a cookie by name
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}
	let params = new URLSearchParams(document.location.search);
	let avatar = params.get("avatar");
	let name = params.get("name");
	let mail = params.get("mail");
	let directedTo = '';
	
	console.log(name)
	console.log(mail)
	console.log(avatar)
	console.log(name + " " + mail + " " + avatar);

	var yourAvatar = document.getElementById("yourAvatar")
    yourAvatar.innerHTML = "Your Avatar is the: " + avatar;
    
    //directedTo = "https://wealthavatarr.com/";

	if(avatar == 'Banker')
		directedTo = 'https://wealthavatarr.com/banker?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Capitalist')
		directedTo = 'https://wealthavatarr.com/capitalist?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Sales Person')
		directedTo = 'https://wealthavatarr.com/salesperson?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Conqueror')
		directedTo = 'https://wealthavatarr.com/conqueror?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Giver')
		directedTo = 'https://wealthavatarr.com/giver?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Influencer')
		directedTo = 'https://wealthavatarr.com/influencer?archetype=' + avatar + '&name=' + name + '&email=' + mail;
	else if(avatar == 'Adversary')
		directedTo = 'https://wealthavatarr.com/adversary?archetype=' + avatar + '&name=' + name + '&email=' + mail;
					
    setTimeout(function(){
        window.location.href = directedTo;
    }, 5000);
    
  </script>
  
  <!-- Scripts 
	<script>
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    var currentUrl = new URL(window.location.href);
    var name = getCookie('name') ? getCookie('name') : currentUrl.searchParams.get('name');
    var email = getCookie('email') ? getCookie('email') : currentUrl.searchParams.get('email');
    var archetype = getCookie('archetype') ? getCookie('archetype') : currentUrl.searchParams.get('archetype');
    var reading = getCookie('reading') ? getCookie('reading') : currentUrl.searchParams.get('reading');
    var gender = getCookie('gender');
    var birthday = getCookie('birthday');
    var ageCategory = "";
    var genderCategory = "";

    // handle dynamic content

    $('.archetype').text(archetype);
    $('#archetype-img').attr('src', `https://individualogist.com/lp/assets/image/${archetype}.png`);

    function getAge(birthDateString) {
      var today = new Date();
      var birthDate = new Date(birthDateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      return age;
    }

    var age = getAge(birthday);
    if (age <= 27) {
      ageCategory = "athlete stage";
    } else if (age <= 45) {
      ageCategory = "warrior stage";
    } else if (age >= 46) {
      ageCategory = "statement stage";
    }

    if (gender == "male") {
      genderCategory = "anima";
    } else {
      genderCategory = "animus";
    }

    //var currentUrl = new URL(window.location.href);
    if (currentUrl.searchParams.get('utm_source')) {
      var url = "http://individualogist.com/offer/paa/reading-v4?name=" + name + "&email=" + email + "&archetype=" + archetype + "&utm_source=" + currentUrl.searchParams.get('utm_source') + "&utm_medium=" + currentUrl.searchParams.get('utm_medium') + "&utm_campaign=" + currentUrl.searchParams.get('utm_campaign') + "&utm_content=" + currentUrl.searchParams.get('utm_content');
    } else {
      var url = "http://individualogist.com/offer/paa/reading-v4?name=" + name + "&email=" + email + "&archetype=" + archetype;
    }

    $('.start-reading').attr('href', url);
    var seconds = 5;
    function countdown() {
      seconds = seconds - 1;
      if (seconds < 0) {
        window.location.href = url;
      } else {
        document.getElementById("countdown").innerHTML = seconds;
        window.setTimeout("countdown()", 1000);
      }
    }

    countdown();
    if (getCookie('name')) {
      $('.name').html(getCookie('name'));
    }
  </script>
-->
</body>

<html>