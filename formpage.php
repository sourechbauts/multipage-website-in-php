<!DOCTYPE html>
<html>
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

  	<!-- Facebook and Twitter integration
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />-->

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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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


</head>


<body>
	<script>
			adjustOnResize();
		</script>

	<!--include header ici-->
<?php include('partials/headerFinal.php'); ?>

    <!--<div class="container">
			<h2>Contact</h2>
			<p>"Nous ne partagerons jamais vos informations personnelles avec un tiers."</p>

			<form enctype="multipart/form-data" action="contact.php" method="post" id="formContact">
				<br>
				<div class="form-check form-check-inlines">
					<input class="form-check-input" type="radio" name="title" id="inlineRadioMme" value="Mme">
					<label class="form-check-label" for="inlineRadioMme">Mme</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="title" id="inlineRadioMlle" value="Mlle">
					<label class="form-check-label" for="inlineRadioMlle">Mlle</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="title" id="inlineRadioMr" value="Mr">
					<label class="form-check-label" for="inlineRadioMr">Mr</label>
				</div>
				<br id='errorTitle'>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="inputFirstName">Prénom</label>
							<input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="Votre prénom">
						</div>
						<br id="errorFirstName">
						</div>
						<div class="col-sm-6">
						<div class="form-group">
							<label for="inputLastName">Nom</label>
							<input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Votre nom">
						</div>
						<br id="errorName">
						</div>
					</div>

				<div class="row">
					<div class="col-sm-6">

						<div class="form-group">
							<label for="inputEmail">Adresse email</label>
							<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Votre adresse email">
						</div>
						<br id="errorEmail">

					</div>
					<div class="col-sm-6">

						<div class="form-group">
							<label for="inputPhone">Téléphone</label>
							<input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Votre téléphone">
						</div>
						<br id="errorPhone">

					</div>

				</div>

				<!--<div class="form-group">
					<label for="selectObjet">Objet</label>
					<select name="subject" class="form-control" id="selectObjet">
						<option value="recherche">Vous souhaitez obtenir plus d'information sur nos actions ?</option>
						<option value="question">Vous avez une question ou une suggestion à nous faire ?</option>
						<option value="other">Autre</option>
					</select>
				</div>
				<br id="errorSubject">-->

				<!--<div class="form-group">
					<label for="textareaMessage">Message</label>
					<textarea name="message" class="form-control" id="textareaMessage" placeholder="Votre message"></textarea>
				</div>
				<br id="errorMessage">

				<div class="row">
					<div class="col-sm-6">

						<div class="form-group">
							<label for="upload">Documents</label>
							<input type="file" size="32" name="image_field" class="form-control-file" value="" id="upload">
						</div>
						<br id="errorUpload">

					</div>
					<div class="col-sm-6">

						<label for="reply_type">Format de réponse souhaité</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reply_type" id="reply_type1" value="HTML" checked>
							<label class="form-check-label" for="reply_type1">
								HTML
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reply_type" id="reply_type2" value="Texte">
							<label class="form-check-label" for="reply_type2">
								Texte
							</label>
						</div>
						<br id="errorResponse">

					</div>
					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-danger" id="firstformelement">Envoyer</button>
					</div>
		</div>
</form>
</div>-->
<div class="container">
	<div class="row">
		<div class="col-xl-9 mx-auto">
			<div class=" text-center rounded" id="forms">
				<!-- FORMULAIRE  -->
			 <form class="" action="contact.php" method="post" enctype="multipart/form-data">
			 <fieldset>
				 <legend><strong>CONTACT</strong></legend>
				 <input type="radio" name="gender" value="monsieur"><strong>Monsieur</strong>
				 <input type="radio" name="gender" value="madame"><strong>Madame</strong><br><br>
				 <strong>Nom: </strong><?php if(isset($_POST['button'])){echo $errors['nom'];} ?><br><input id="textinput" name="nom" type="text" placeholder="nom" class="form-control input-md"><br>
				 <strong>Prenom: </strong> <?php if(isset($_POST['button'])){echo $errors['prenom'];} ?><br><input id="textinput" name="prenom" type="text" placeholder="prenom" class="form-control input-md"><br><br>
				 <strong>Objet:</strong><br><select name="objet" size="1">
					 <option value="information"><strong>Information</strong></option>
					 <option value="benevolat"><strong>Benevolat</strong></option>
					 <option value="donation"><strong>Donation</strong></option>
					 <option value="autre"><strong>Autre</strong></option>
				 </select><br><br>
				 <strong>Message: </strong><?php if(isset($_POST['button'])){echo $errors['message'];} ?><br><textarea class="form-control" id="textarea" name="message" placeholder="message"></textarea><br><br>
				 <strong>Documents:</strong><br><input id="filebutton" name="image_field" class="input-file" type="file" size="32"><br><br>
				 <strong>Format de réponse souhaité </strong><input type="radio" name="format" value="html"><strong>HTML</strong>
				 <input type="radio" name="format" value="texte"><strong>Texte</strong><br><br>
				 <strong>E-mail: </strong><?php if(isset($_POST['button'])){echo $errors['email'];} ?><br><input id="textinput" name="email" type="text" placeholder="adresse email" class="form-control input-md"><br>
				 <strong>Mot de passe: </strong><input id="passwordinput" name="password" type="password" placeholder="mot de passe" class="form-control input-md"><br><br>
				 <button id="singlebutton" name="button" class="btn-default" type="submit"><strong>Contactez-nous</strong></button><br>
			 </fieldset>
			 </form>
			</div>
		</div>
	</div>
</div>

    <!-- le footer est ici -->
  		<?php include ('partials/footer2.php'); ?>
</body>

</html>
