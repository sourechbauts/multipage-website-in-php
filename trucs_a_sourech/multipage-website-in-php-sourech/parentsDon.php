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
<!--<script id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#00468B" data-fg="#FFFFFF" data-link="#F47B39" data-text-align="left" data-close-text="OK" data-message="<font color='#FFFFFF'>Nous utilisons des cookies pour faciliter votre navigation et pour mieux adapter le contenu de notre site à vos besoins et préférences.</font><br>" data-linkmsg="Plus d'information" data-moreinfo="contact/privacy.php">


</script>-->

<script>
    var euro = String.fromCharCode(8364);

    function selectPay(nr) {
        document.getElementById('pay' + nr).checked = true;
    }

    function selectWithdraw() {
        document.getElementById('banktr').style.display = document.getElementById('pay3').checked ? "" : "none";
    }

    function checkAnders() {
        document.getElementById('kanders').style.display = sponsorship.knowus.value == 'other' ? "" : "none";
        if (sponsorship.knowus.value == 'other')
            sponsorship.kentanders.focus();
    }

    function goSubmit() {
        if (!document.getElementById('cnty1').checked && !document.getElementById('cnty2').checked) {
            alert('S\'il vous pla\u00EEt indiquer votre pr\u00E9f\u00E9rence pour le pays.');
            document.getElementById('cnty1').focus();
            return;
        }
        if (document.getElementById('cnty2').checked && !sponsorship.othercountry.value) {
            alert('S\'il vous pla\u00EEt indiquer votre pr\u00E9f\u00E9rence pour l\'autre pays.');
            sponsorship.othercountry.focus();
            return;
        }
        if (!document.getElementById('gend1').checked && !document.getElementById('gend2').checked && !document.getElementById('gend3').checked) {
            alert('S\'il vous pla\u00EEt indiquer votre pr\u00E9f\u00E9rence pour le sexe.');
            document.getElementById('gend1').focus();
            return;
        }
        if (!document.getElementById('age1').checked && !document.getElementById('age2').checked && !document.getElementById('age3').checked) {
            alert('S\'il vous pla\u00EEt indiquer votre pr\u00E9f\u00E9rence pour l\'\u00E2ge.');
            document.getElementById('age1').focus();
            return;
        }
        if (!document.getElementById('salutF').checked && !document.getElementById('salutM').checked) {
            alert('S\'il vous pla\u00EEt remplir le salut.');
            document.getElementById('salutF').focus();
            return;
        }
        if (!sponsorship.lastname.value) {
            alert('S\'il vous pla\u00EEt remplir votre nom.');
            sponsorship.lastname.focus();
            return;
        }
        if (!sponsorship.firstname.value) {
            alert('S\'il vous pla\u00EEt remplir votre pr\u00E9nom.');
            sponsorship.firstname.focus();
            return;
        }
        if (!sponsorship.street.value) {
            alert('S\'il vous pla\u00EEt remplir votre rue.');
            sponsorship.street.focus();
            return;
        }
        if (!sponsorship.zip.value) {
            alert('S\'il vous pla\u00EEt remplir votre code postal et localit\u00E9.');
            sponsorship.zip.focus();
            return;
        }
        if (!sponsorship.country.value) {
            alert('S\'il vous pla\u00EEt remplir votre pays.');
            sponsorship.country.focus();
            return;
        }
        if (!sponsorship.phone.value) {
            alert('S\'il vous pla\u00EEt indiquer votre t\u00E9l\u00E9phone.');
            sponsorship.phone.focus();
            return;
        }
        if (!sponsorship.email.value) {
            alert('S\'il vous pla\u00EEt remplir votre bo\u00EEte email.');
            sponsorship.email.focus();
            return;
        }
        if (!sponsorship.dob.value) {
            alert('S\'il vous pla\u00EEt indiquer votre date de naissance.');
            sponsorship.dob.focus();
            return;
        }
        if (!document.getElementById('pay1').checked && !document.getElementById('pay2').checked) {
            alert('S\'il vous pla\u00EEt indiquer votre engagement.');
            document.getElementById('pay1').focus();
            return;
        }
        if (document.getElementById('pay2').checked && ((!sponsorship.otheramount.value) || (sponsorship.otheramount.value == euro + ' ') || (sponsorship.otheramount.value == euro))) {
            alert('S\'il vous pla\u00EEt remplir vos frais mensuels.');
            sponsorship.otheramount.focus();
            return;
        }
        if (document.getElementById('pay3').checked && !sponsorship.account.value) {
            alert('S\'il vous pla\u00EEt indiquer votre IBAN.');
            sponsorship.account.focus();
            return;
        }
        if (document.getElementById('pay3').checked && !sponsorship.startmonth.value) {
            alert('S\'il vous pla\u00EEt remplir le mois.');
            sponsorship.startmonth.focus();
            return;
        }
        if (document.getElementById('pay3').checked && !sponsorship.startyear.value) {
            alert('S\'il vous pla\u00EEt remplir l\'ann\u00E9e.');
            sponsorship.startyear.focus();
            return;
        }
        document.getElementById('sndbtn').style.display = "none";
        document.getElementById('brochureloader').style.display = "";
        sponsorship.submit();
    }

</script>


<body>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>



    <!--include header ici-->
  <?php include('header.php'); ?>

    <table id="wholepage" cellpadding="0" cellspacing="0" width="100%" style="padding-top:95px;">
        <tr>
            <td align="center">
                <table class="topmainpage" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center">
                            <table class="mainpage" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="cencol">
                                        <!-- PAGE CONTENT START -->
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <form name="sponsorship" method="post">
                                            <p>&nbsp;</p>
                                            <h1 align="center">
                                                Je deviens Parent du Monde de Nos Petits Orphelins<br>et ainsi je change la vie d'un enfant ! </h1>
                                            <p align="center">
                                                <!--img src="images/pictures/confirmation.jpg" style="border:1px solid #999999; border-radius:5px; width:80%; max-width:800px; box-shadow:3px 3px 10px #999999"-->
                                                <img src="images/76-fr.jpg" style="border:1px solid #999999; border-radius:5px; width:80%; max-width:800px; box-shadow:3px 3px 10px #999999" width="600">
                                            </p>
                                            <br>
                                            <center>
                                                <font color="#FF0000">*</font>
                                                <font size="2">Champs obligatoires</font>
                                            </center>

                                            <table width="80%" align="center" class="formtable" style="background-color:#FDEADA; max-width:800px">
                                                <tr>
                                                    <td colspan="4">
                                                        <h3>Ma pr&eacute;f&eacute;rence :</h3>
                                                        <!--font color="#E36C0A"><b><i>
											D&ucirc; aux &eacute;v&eacute;nements r&eacute;cents et vu les &eacute;normes besoins, nous vous proposons de parrainer un enfant d'Ha&iuml;ti.										</i></b></font-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" width="20%">
                                                        <font color="#FF0000">*</font><b>Pays :</b></td>
                                                    <td>
                                                        <input type="radio" name="nphcountry" value="Sans pr&eacute;f&eacute;rence" id="cnty1" onClick="document.getElementById('othcnty').value='';" checked><label for="cnty1">Sans pr&eacute;f&eacute;rence</label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="nphcountry" value="other" id="cnty2"><label for="cnty2">Pays :</label>
                                                    </td>
                                                    <td>
                                                        <select name="othercountry" id="othcnty" style="font-size:14px" onFocus="document.getElementById('cnty2').checked=true;">
											<option value="">- s&eacute;lectionner -</option>
											<option value="Bolivie">Bolivie</option>
											<option value="R&eacute;publique dominicaine">R&eacute;publique dominicaine</option>
											<option value="Salvador">Salvador</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Ha&iuml;ti">Ha&iuml;ti</option>
											<option value="Honduras">Honduras</option>
											<option value="Mexique">Mexique</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="P&eacute;rou">P&eacute;rou</option>
										</select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <hr size="1" color="#CCCCCC">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font><b>Sexe :</b></td>
                                                    <td>
                                                        <input type="radio" name="gender" value="Sans pr&eacute;f&eacute;rence" id="gend3" checked><label for="gend3">Sans pr&eacute;f&eacute;rence</label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="gender" value="Gar&ccedil;on" id="gend1"><label for="gend1">Gar&ccedil;on</label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="gender" value="Fille" id="gend2"><label for="gend2">Fille</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <hr size="1" color="#CCCCCC">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font><b>&Acirc;ge</b></td>
                                                    <td>
                                                        <input type="radio" name="age" value="Sans pr&eacute;f&eacute;rence" id="age3" checked><label for="age3">Sans pr&eacute;f&eacute;rence</label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="age" value="0-14 ans" id="age1"><label for="age1">0-14 ans</label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="age" value=">14 ans" id="age2"><label for="age2">>14 ans</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <hr size="1" color="#CCCCCC">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"><input type="checkbox" name="beperking" value="on" id="anvbep"></td>
                                                    <td colspan="3" style="line-height:normal">
                                                        <label for="anvbep">
											J'accepte de parrainer un enfant avec un <b>handicap physique et/ou mental</b>.										</label>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            <table width="80%" align="center" class="formtable" style="background-color:#FDEADA; max-width:800px">
                                                <tr>
                                                    <td colspan="2">
                                                        <h3>Je sais lire et &eacute;crire :</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <input type="checkbox" class="chk" name="spanish" id="lang2">
                                                    </td>
                                                    <td>
                                                        <label for="lang2">Espagnol</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <input type="checkbox" class="chk" name="english" id="lang3">
                                                    </td>
                                                    <td>
                                                        <label for="lang3">Anglais</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center">
                                                        Si n&eacute;cessaire, nous nous chargeons de la traduction de vos &eacute;changes de courrier. </td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            <table width="80%" align="center" class="formtable" style="background-color:#FDEADA; max-width:800px">
                                                <tr>
                                                    <td colspan="2">
                                                        <h3>Mes coordonn&eacute;es :</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" width="35%">
                                                        Entreprise / Ecole : </td>
                                                    <td width="65%">
                                                        <input type="text" class="txt" name="company" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Titre : </td>
                                                    <td>
                                                        <label><input type="radio" name="salutation" id="salutF" value="Madame"> Madame</label>
                                                        <label><input type="radio" name="salutation" id="salutM" value="Monsieur"> Monsieur</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Nom : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="lastname" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Pr&eacute;nom : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="firstname" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Rue + nr + bte : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="street" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Code postal + localit&eacute; : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="zip" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Pays : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="country" value="Belgique" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>T&eacute;l&eacute;phone / GSM : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="phone" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Email : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="email" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <font color="#FF0000">*</font>Date de naissance : </td>
                                                    <td>
                                                        <input type="text" class="txt" name="dob" style="width:300px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">Comment avez-vous<br>entendu parler de nous ?</td>
                                                    <td>
                                                        <select class="sel" name="knowus" onChange="checkAnders()" style="width:300px">
											<option value="">- s&eacute;lectionner -</option>
											<option value="Facebook">Facebook</option>
											<option value="Recherches sur internet">Recherches sur internet</option>
											<option value="Famille / Amis">Famille / Amis</option>
											<option value="Annonce dans un journal">Annonce dans un journal</option>
											<option value="Bulletin d&acute;information">Bulletin d&acute;information</option>
											<option value="other">Autre :</option>
										</select>
                                                    </td>
                                                </tr>
                                                <tr id="kanders" style="display:none">
                                                    <td align="right">&nbsp;</td>
                                                    <td><input type="text" class="txt" name="kentanders" style="width:300px"></td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            <table width="80%" align="center" class="formtable" style="background-color:#FDEADA; max-width:800px">
                                                <tr>
                                                    <td colspan="2">
                                                        <h3>
                                                            <font color="#FF0000" style="font-weight:normal">*</font>
                                                            Je m'engage &agrave; verser mensuellement :</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="35%" align="right">
                                                        <input type="radio" class="rad" name="payment" value="fixed" id="pay1">
                                                    </td>
                                                    <td><label for="pay1">28 &euro;</label></td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <input type="radio" class="rad" name="payment" value="other" id="pay2">
                                                    </td>
                                                    <td><label for="pay2"><input type="text" class="txt" name="otheramount" style="width:100px" value="&euro; " onFocus="selectPay(2)"> (min. 28 &euro;)</label></td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        <input type="checkbox" class="rad" name="domicile" id="pay3" onClick="selectWithdraw()">
                                                    </td>
                                                    <td><label for="pay3">Je fais une domiciliation</label></td>
                                                </tr>
                                                <tr style="display:none" id="banktr">
                                                    <td colspan="2" style="padding:20px">
                                                        <table>
                                                            <tr>
                                                                <td style="border:1px solid #CCCCCC; border-radius:5px; padding:20px">
                                                                    <h3>
                                                                        <font color="#FF0000" style="font-weight:normal">*</font>Mes donn&eacute;es bancaires :</h3>
                                                                    <p>
                                                                        Num&eacute;ro de compte IBAN : <input type="text" class="txt" name="account">
                                                                    </p>
                                                                    <p>
                                                                        Date du 1er pr&eacute;l&egrave;vement :
                                                                        <b>05/<input type="text" class="txt" style="width:50px" name="startmonth">/<input type="text" class="txt" style="width:50px" name="startyear" value="2018"></b> (compl&eacute;tez le mois s.v.p.) </p>
                                                                    <p>
                                                                        Les pr&eacute;l&egrave;vements ont lieu le 5 de chaque mois et commencent au minimum 15 jours apr&egrave;s avoir rempli ce formulaire. </p>
                                                                    <p>
                                                                        <hr size="1" color="#CCCCCC">
                                                                    </p>
                                                                    <p style="font-size:12px">
                                                                        En remplissant ce formulaire de mandat, vous autorisez :
                                                                        <ul>
                                                                            <li style="font-size:12px; line-height:normal">
                                                                                A. la Fondation Nos Petits Orphelins &agrave; envoyer des instructions &agrave; votre banque pour d&eacute;biter votre compte chaque mois du montant que vous avez indiqu&eacute; ci-dessus; </li>
                                                                            <li style="font-size:12px; line-height:normal">
                                                                                B. votre banque &agrave; d&eacute;biter votre compte conform&eacute;ment aux instructions de la Fondation Nos Petits Orphelins. Vous b&eacute;n&eacute;ficiez d'un droit au remboursement par votre banque selon les conditions d&eacute;crites dans la convention que vous avez pass&eacute;e avec elle. Toute demande de remboursement doit &ecirc;tre pr&eacute;sent&eacute;e dans les 8 semaines suivant la date de d&eacute;bit de votre compte. Votre banque peut vous renseigner au sujet de vos droits relatifs &agrave; ce mandat. </li>
                                                                        </ul>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            <p align="center">
                                                <label>
									<input type="checkbox" class="chk" name="newsletter">
									Je souhaite m&acute;inscrire &agrave; la lettre d'information.								</label>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p align="center">
                                                <center>
                                                    <div class="loader" id="brochureloader" style="display:none"></div>
                                                    <input type="button" class="btn" id="sndbtn" value="Envoyer" onClick="goSubmit()">
                                                </center>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>&nbsp;</p>
                                        </form>
                                        <!-- PAGE CONTENT END -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td id="rigcol_bottom" align="center" style="display:none">
                <!-- rigcol innerHTML moves here if page too small -->
            </td>
        </tr>
        <tr>
            <td align="center">
                <table bgcolor="#EEEEEE" style="border:4px solid #F28B00; border-radius:20px" cellpadding="20" width="80%">
                    <tr>
                        <td align="center">
                            <a href='https://trooper.be/weeskinderen/' target='_blank'>
	                            	<img src="images/trooper.gif" style="border:3px solid #3FC1C1; border-radius:20px" width="250">
								</a>
                        </td>
                        <td>
                            <b>Acheter en ligne ? Faites vos achats dans les boutiques en ligne mentionn&eacute;es sur notre page Trooper <a href='https://trooper.be/weeskinderen/' target='_blank'>trooper.be/weeskinderen</a>. Pour chaque achat effectu&eacute; Nos Petits Orphelins obtient un pourcentage du prix de vente, sans que cela ne vous co&ucirc;te davantage. Merci !								</b>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>

    </table>
    <script>
        function newsLetterGo(pop) {
            if (newsletter.email) newsletter.email.disabled = true;
            if (newsletter.nwsbtn) newsletter.nwsbtn.disabled = true;
            runletter.location.href = "https://www.nph-belgium.org/ws/include/newsletter-submit.php?host=nph-belgium.org&email=" + newsletter.email.value + "&pop=" + pop;
        }

    </script>


<!--le footer est ici-->
    <?php include ('footer.php'); ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/59de453e4854b82732ff4f75/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
