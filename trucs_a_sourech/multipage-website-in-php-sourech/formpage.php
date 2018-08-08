<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML5 Contact Form With File Upload - reusable form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
</head>

<body>-->


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nos Petits Orphelins</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.jpg">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">

	<!-- test -->
	<link rel="stylesheet" type="text/css" href="content.css">
	<!--<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">-->

  <script src="form.js"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
<!--</head>-->
<script src="https://www.nph-belgium.org/ws/scripts/client/cookies.js" type="text/javascript"></script>
<script src="https://www.nph-belgium.org/ws/scripts/client/functions-new-170606A.js" type="text/javascript"></script>

<script src="https://www.nph-belgium.org/ws/scripts/client/helptips.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.12.0/jquery-ui.js" type="text/javascript"></script>
<script src="//apis.google.com/js/plusone.js" type="text/javascript">{lang: 'fr'}</script>

<script>
	$(function(){
		if ( navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
			$('#ios-notice').removeClass('hidden');
			$('.parallax-container').height( $(window).height() * 0.5 | 0 );
		} else {
			$(window).resize(function(){
				var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
				$('.parallax-container').height(parallaxHeight);
			}).trigger('resize');
		}
	});
</script>

<script src="https://www.nph-belgium.org/ws/scripts/client/parallax.1.4.2/parallax.min.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-30066843-1"></script>

<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-30066843-1');		gtag('config', 'AW-980438099');</script>


<!-- OLD script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-30066843-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script-->

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '509269365908464');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" src="https://www.facebook.com/tr?id=509269365908464&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!--<script id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-bg="#00468B"
	data-fg="#FFFFFF"
	data-link="#F47B39"
	data-text-align="left"
	data-close-text="OK"
	data-message="<font color='#FFFFFF'>Nous utilisons des cookies pour faciliter votre navigation et pour mieux adapter le contenu de notre site à vos besoins et préférences.</font><br>"
	data-linkmsg="Plus d'information"
	data-moreinfo="contact/privacy.php">
</script>-->

<body>
				</td>
			</tr>
		</table>

					</table>			</td>
		</tr>
	</table>		<script>
			adjustOnResize();
		</script>

	<!--include header ici-->
<?php include('header.php'); ?>
    <div class="container">
        <div id="form-main">
            <div id="form-div">
                <form class="montform" id="reused_form" enctype=&quot;multipart/form-data&quot;>
                    <p class="name">
                        <p>Nom + Prénom</p>
                        <br />
                        <input name="name" type="text" class="feedback-input" required placeholder="Nom + Prénom" id="Nom + Prénom" />
                    </p>
                    <p class="email">
                        <p>Email</p>
                        <br />
                        <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                    </p>
                    <p class="text">
                        <p>Message</p>
                        <br />
                        <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
                    </p>
                    <p class="file">
                        <input name="image" type="file" id="file" class="feedback-input">
                    </p>
                    <div class="submit">
                        <button type="submit" class="button-blue">envoi</button>
                        <div class="ease"></div>
                    </div>
                </form>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h4>
                        Error
                    </h4>
                    Sorry there was an error sending your form.
                </div>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h2>Votre message à bien été envoyé</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- le footer est ici -->
  		<?php include ('footer.php'); ?>
</body>

</html>
