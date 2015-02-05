<!DOCTYPE HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Start keywords for the website -->
<meta name="keywords" content="INDUSTRIAL DESIGN  INNOVATION  DESIGN AND PRODUCT DEVELOPMENT  DISABILITY  REHAB  DESIGN  INNOVATIVE  PRODUCT  CONCEPTS  IDEATION  CREATIVITY  INNOVATIVE  SOLUTIONS  FOOD MACHINERY  MEDICO TECH  MEDICAL DEVICE  TOOLS  MACHINE USER-DRIVEN INNOVATION  USER INVOLVEMENT GREEN TECH  DANCOF  APPLIANCES  HYGIENIC DESIGN  PHOTO EQUIPMENT  MACHINES  PRODUCTS  GLOBAL  INTERNATIONAL  IDEAS  HOUSEHOLD  TOOLS  INCREASED PRODUCT SALES  MEDICAL EQUIPMENT  TRANSPORT DESIGN SHIPS  MARINE  DEFENSE INDUSTRY  DESIGN STUDIO
* INDUSTRIEL DESIGN   INNOVATION   DESIGN OG PRODUKTUDVIKLING   HANDICAP   REHAB  DESIGN   INNOVATIVE PRODUKTER   KONCEPTER   IDEGENERERING   KREATIVITET   INNOVATIVE  L�SNINGER   FOEDEVARETEKNOLOGI   MEDICOTECH   REDSKABER   MASKINER   BRUGERDREVEN   INNOVATION   BRUGERINDDRAGELSE   GREENTECH  DANCOF   APPARATER   HYGIEGNISK DESIGN   FOTOUDSTYR   MASKINER   PRODUKTER   GLOBAL   INTERNATIONAL   IDEER   HUSHOLDNINGSARTIKLER   VAERKTOJ   OEGET PRODUKT SALG   MEDICINSK UDSTYR   TRANSPORTDESIGN   SKIBE   MARINE   FORSVARSINDUSTRI   DESIGN STUDIE  
"/>
<!-- End keywords for the website -->

<!-- Start description of the website -->
<meta name="description" content="For almost two decades BRAHE DESIGN has serviced a broad range of industries with INDUSTRIAL DESIGN and ideation in developing their products. We build up long lasting relations with our clients, some of which have been serviced by us for more than a decade."/>
<!-- End description of the websiten -->

<title>Brahe-Design.dk by GroupX</title>

<!-- Start Stylesheet for our site -->
<link href="style/template_sune.css" rel="stylesheet" type="text/css" />
<!-- End Stylesheet forour site -->

<!-- Start Slider HEAD javascript -->
	<script type="text/javascript" src="wow_engine/wowslider.js"></script>
<!-- End Slider HEAD javascript -->

<!-- Start favorite icon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- End favorite icon -->

<!-- Start Ajax Contact Form -->
<style type="text/css">
 @import url('assets/css/contact.css');
</style>
	<!--<script type="text/javascript" src="assets/js/jquery.js"></script>-->
	<script type="text/javascript" src="assets/js/js.js"></script>
<!-- End Ajax Contact Form -->

</head>

<body>

<!-- Start Designer Name -->
<div id="designer"><a href="http://www.groupx.dk"><img class="img_groupx" src="images/GroupX_logo.png" alt="groupx logo" title="a GroupX Production"></a></div>
<!-- End Designer Name -->

<!-- Start our Wrapper -->
<div id="wrapper">

<!-- Start our header which contains our logo and menu -->
<div id="header" class="shadowTwo">

<!-- Start our social menu -->
<div id="social">
<ul id="ul_social">
	<li class="li_social"><a href="http://www.facebook.com/pages/BRAHE-DESIGN/187958574612645"><img src="images/Facebook-icon.png" alt="facebook" title="visit brahe-designs facebook page" width="24" height="24" onmouseover="this.src='images/Facebook2-icon.png'" onmouseout="this.src='images/Facebook-icon.png'"></a></li>
	<li class="li_social"><a href="http://www.twitter.com"><img src="images/Twitter-icon.png" alt="twitter" title="follow brahe design on twitter" width="24" height="24" onmouseover="this.src='images/Twitter2-icon.png'" onmouseout="this.src='images/Twitter-icon.png'"></a></li>
    <li class="li_social"><a href="http://www.youtube.com"><img src="images/YouTube-icon.png" alt="youtube" title="visit brahe-designs youtube channel" width="24" height="24" onmouseover="this.src='images/YouTube2-icon.png'" onmouseout="this.src='images/YouTube-icon.png'"></a></li>
</ul>
</div>
<!-- End our social menu -->

<!-- Start our brahe logo -->
<div id="logo"><a href="index.php"><img src="style/brahe-design_logo_v2.png" alt="brahe logo" /></a></div>
<!-- End our brahe logo -->

<!-- Start our PHP menu -->
<div id="menuContainer">
<?php include_once("menu_template.php"); ?>
</div>
<!-- End our PHP menu -->

</div>
<!-- End our header which contains our logo and menu -->

<!-- Start our bodyContainer -->
<div id="bodyContainer" class="shadowTwo"> 
  
<!-- Start left bottom box -->
<div id="bodyContainerBotLeft" class="shadow">
	<h3 class="nyhed">Skriv en mail til os.</h3>

<!-- Start Ajax Contact Form html -->
<div id="contact_form">
            <form method="post" action="assets/php/send.php" id="contactForm">
                <div class="error" id="error">En fejl opstod og beskden blev ikke sendt!</div>
                <div class="success" id="success">Din besked er sendt!<br />Tak fordi du kontaktede os, vi vender tilbage snarest.</div>

                    <span class="input">
<!--<label for="name"><b>Navn:</b> </label>-->
<input  type="text" id="name" name="name" value="navn" onClick="this.value=''" />
<div class="warning" id="nameError">Udfyld venligst med navn.</div>
</span>

<span class="input">
<!--<label for="email"><b>Email:</b> </label>-->
<input  type="text" id="email" name="email" value="email" onClick="this.value=''" />
<div class="warning" id="emailError">Skriv en valid email addresse.</div>
</span>

<span class="input">
<!--<label for="phone"><b>Telefon:</b> </label>-->
<input  type="text" id="phone" name="phone" value="telefon" onClick="this.value=''" />
<div class="warning" id="phoneError">Kun tal er accepteret!</div>
</span>

<span class="input">
<!--<label for="sales"><b>Afdeling:</b> </label>-->
<select id="sales" name="sales" style="width:317px">
<option value="Support">Support</option>
<option value="Sales">Salg</option>
<option value="Other">Andet</option>
</select>
</span>

<span class="input">
<!--<label for="message"><b>Besked:</b> </label>-->
<textarea id="message" name="message" style="width:310px">Besked
</textarea>
<div class="warning" id="messageError">Dette felt skal udfyldes!</div>
</span>

<span class="input">
<!--<label for="security_code"><b>Spamkode:</b> </label>-->
<input class="noicon" type="text" id="security_code" name="security_code" style="width:120px" value="spamkode" onClick="this.value=''" />
<img src="assets/php/security/1/sec.php" style="vertical-align:middle;" />
<div class="warning" id="security_codeError">Spamkoden var forkert!</div>
</span>
                    <span id="submit" class="input">
                    <!--<label for="submit"></label>-->
                    <p id="ajax_loader" style="text-align:center;"><img src="assets/img/contact/ajax-loader.gif" /></p>
                    <input id="send" type="submit" value="SEND" />
                    </span>

                </form>
</div>
<!-- End Ajax Contact Form html -->

</div>
<!-- End our left bottom box -->

<!-- Start right bottom box -->
<div id="bodyContainerBotRight" class="shadow">
<h3 class="nyhed">Lad os mødes og diskuttere dit næste forretnings projekt.</h3>
    <p class="text">
        BRAHE DESIGN<br /><br /> 
        
        Onsgaardsvej 33, P. Box 4<br /> 
        DK-2900 Hellerup<br /><br />
         
        CVR: 12 16 47 50<br /><br />
         
        Telefon: (+45) 3962 5719<br /><br />
         
        Mail: info@brahe-design.dk (eller brug vores nemme instant-mail på denne side)<br /><br />
        
        Jakob Brahe-Pedersen direkte:<br /> (+45) 4031 6330<br /><br />
         
        Vi ligger kun 35min væk med tog fra Københavns Lufthavn eller 10min fra Hellerup togstation.
        Vi er altid klar på et møde og en uformel sametale omkring design og hvordan vi kan assistere dig med vores ekspertise. 
    </p> 
</div>
<!-- End our right bottom box -->

<!-- Start our bottom information box -->
<div id="botInfo">
    <p class="textInfo">
    	Onsgaardvej 33 * DK-2900 Hellerup * Tel: +45 3962 5719 * info@brahe-design.dk
    </p>
</div>
<!-- End our bottom information box -->

</div>
<!-- End bodyContainer -->

</div>
<!-- End our Wrapper -->

</body>
</html>
