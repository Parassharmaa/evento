<!---

                                 ______                                       _     _                 
                                |___  /                                      | |   (_)                
  _ __     __ _   _ __    __ _     / /   ____     ___   _ __    ___    __ _  | |_   _    ___    _ __  
 | '_ \   / _` | | '__|  / _` |   / /   |_  /    / __| | '__|  / _ \  / _` | | __| | |  / _ \  | '_ \ 
 | |_) | | (_| | | |    | (_| |  / /__   / /    | (__  | |    |  __/ | (_| | | |_  | | | (_) | | | | |
 | .__/   \__,_| |_|     \__,_| /_____| /___|    \___| |_|     \___|  \__,_|  \__| |_|  \___/  |_| |_|
 | |                                                                                                  
 |_|                                                                                                  

-->
<!DOCTYPE html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Evento">
    <meta name="author" content="ParaZz">
	<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="icon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="icon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="icon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="icon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="icon/manifest.json">
	<link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="icon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="CESS ">
	<meta name="application-name" content="Evento ">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="icon/mstile-144x144.png">
	<meta name="msapplication-config" content="icon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
<html>

<head>
	<title>Event Manager</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="assets/styles/login.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="colorido">

<div class="registration-form">
  <header>
    <h1>Sign Up</h1>
    <p>Fill in all informations</p>
  </header>
  <form>
    <div class="input-section email-section">
      <input type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off" class="email"/>
      <div class="animated-button"><span class="icon-paper-plane"><i class="ion-email"></i></span><span class="next-button email"><i class="ion-chevron-up"></i></span></div>
    </div>
  	 <div class="input-section username-section folded">
      <input type="password" placeholder="Enter Username" class="password"/>
      <div class="animated-button"><span class="icon-lock"><i class="ion-locked"></i></span><span class="next-button password"><i class="ion-chevron-up"></i></span></div>
    </div>
    <div class="input-section password-section folded">
      <input type="password" placeholder="ENTER YOUR PASSWORD HERE" class="password"/>
      <div class="animated-button"><span class="icon-lock"><i class="ion-locked"></i></span><span class="next-button password"><i class="ion-chevron-up"></i></span></div>
    </div>
    <div class="input-section repeat-password-section folded">
      <input type="password" placeholder="REPEAT YOUR PASSWORD HERE" class="repeat-password"/>
      <div class="animated-button"><span class="icon-repeat-lock"><i class="ion-locked"></i></span><span class="next-button repeat-password"><i class="ion-paper-airplane"></i></span></div>
    </div>
  	
    <div class="success"> 
      <p>ACCOUNT CREATED</p>
    </div>
  </form>
</div>
<script>
		$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);
	</script>
	<script src="assets/scripts/config.json"></script>
	<script src="assets/scripts/colorido.min.js"></script>
	
</body>

</html>