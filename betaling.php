<?php

session_start();

 Class Vare
{
          public $vnr="";
          public $navn="";
          public $billede="";
          public $pris="";
          public $beskrivelse="";
          
          function udskriv()
          
       {    
               echo "<h2>" . $this->navn  ."</h2><br />";
               echo "<img src='" . $this->billede . "' alt='" . $this->navn . "' /><br /><br />";
               echo $this->beskrivelse . "<br />";
               echo "<b><u><h3>Pris kr. " . $this->pris . "</b></u></h3><br />";
               echo "<form method='get' action='' >";
               echo "<p><input type='hidden' name='vnr' value='".$this->vnr . "' />";
               echo "<select name='antal'>";
               echo "<option value='1' selected='selected'>1</option>";
               echo "<option value='2'>2</option>";
               echo "<option value='3'>3</option>";
               echo "</select>";
               echo "<input type='submit' value='Læg i kurv'  /></p>";
               echo "</form>";
               echo "<hr />";
	   }
} 

function list_faktura()
{
		  
	$nummer=file_get_contents('fakturanummer.txt');
	$nummer++;
	file_put_contents('fakturanummer.txt',$nummer);
	$faktura="<h3 class='nyhed'>Faktura nr: $nummer</h3>";
	$faktura.="<h3 class='nyhed'>Forsendelses Adresse: </h3>";
	$faktura.="<p class='text'>".$_GET['navn']." <br />";
	$faktura.=$_GET['gade']." <br />";
	$faktura.=$_GET['by']. " <br />";
	$faktura.=$_GET['email']. " <br />";


	$total=0;
	$faktura.="<h3 class='nyhed'>Valgte Varer: </h3>";
	foreach($_SESSION['kurv'] as $vnr => $antal){
	$faktura.="<p class='text'>".$antal. ' designer(e) ' ;
	$faktura.=$_SESSION['katalog'] [$vnr] ->navn." <br />";
	$pris=$_SESSION['katalog'][$vnr] -> pris;
	$faktura.=" pris per designer: kr. ".$pris."<br />samlet pris for pakken: ";
	$antalpris=$antal*$pris;
	$faktura.=" kr. " .$antalpris. " <br />";
	$total=$total+$antalpris;
	}

	$faktura.="<br />Samlet Beløb kr. ".$total. "<br />";
	
	$faktura.="Porto: 50 kr </br>";
	$total=$total+50;
	$_SESSION['total']=$total;
	$faktura.="</br>Køb inkl. Porto kr. ". $total;
	$_SESSION['faktura']=$faktura;
		 
	echo $faktura;
}

?>

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

<title>Brahe Design - 2012</title>

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

<script type="text/javascript" src="http://www.epay.dk/js/standardwindow.js"></script>

</head>

<body>

<!-- Start Designer Name -->
<div id="designer"><a href="http://www.groupx.dk"><img class="img_groupx" src="images/GroupX_logo.png" alt="groupx logo" title="a GroupX Production"></a></div>
<!-- End Designer Name -->

<!-- Start our Wrapper -->
<div id="wrapper">

<!-- Start our header which contains our logo and menu -->
<div id="header" class="shadowTwo">

<!-- Start our contact btn -->
<!--<div id="kontakt"></div>-->
<!-- End our contact btn -->

<!-- Start our social menu -->
<div id="social">
<ul id="ul_social">
	<li class="li_social"><a href="http://www.facebook.com/pages/BRAHE-DESIGN/187958574612645"><img src="images/Facebook-icon.png" border="0" alt="facebook" title="visit brahe-designs facebook page" width="24" height="24" onmouseover="this.src='images/Facebook2-icon.png'" onmouseout="this.src='images/Facebook-icon.png'"></a></li>
	<li class="li_social"><a href="http://www.twitter.com"><img src="images/Twitter-icon.png" alt="twitter" title="follow brahe design on twitter" width="24" height="24" onmouseover="this.src='images/Twitter2-icon.png'" onmouseout="this.src='images/Twitter-icon.png'"></a></li>
    <li class="li_social"><a href="http://www.youtube.com"><img src="images/YouTube-icon.png" alt="youtube" title="visit brahe-designs youtube channel" width="24" height="24" onmouseover="this.src='images/YouTube2-icon.png'" onmouseout="this.src='images/YouTube-icon.png'"></a></li>
</ul>
</div>
<!-- End our social menu -->

<!-- Start our brahe logo -->
<div id="logo"><a href="index.php"><img src="style/brahe-design_logo_v2.png" alt="brahe logo"></a></div>
<!-- End our brahe logo -->

<!-- Start our PHP menu -->
<div id="menuContainer">
<?php include_once("menu_template.php"); ?>
</div>
<!-- End our PHP menu -->

</div>
<!-- End our header which contains our logo, menu and social bar -->

<!-- Start our bodyContainer -->
<div id="bodyContainer" class="shadowTwo"> 

<!-- Start left bottom box -->
<div id="bodyContainerBotLeft" class="shadow">

	 <?php  
		 if (isset($_GET['navn']) )list_faktura(); 
			 else header('Location: services.php'); 
	            ?>                    
	 
<form action='https://ssl.ditonlinebetalingssystem.dk/popup/default.asp'
                          method='post' name='ePay' target='ePay_window' id='ePay'>
          <input type='hidden' value='1' name='language'>
          <input type='hidden' value='8887969' name='merchantnumber'>
          <input type='hidden' value='208' name='currency'> 
          <input type='hidden' value=" <?php echo $_SESSION['total']*100; ?>"name='amount'>
          <input type='hidden' value='godkendt.php' name='accepturl'> 
          <input type='hidden' value='afvist.php' name='declineurl'>
          <input type='button' class="cancel" value='Køb mere' onclick='location.href="services.php"'> 
          <input type='button' class="submit" value='BETAL' onclick='open_ePay_window()'>  
  </form>
  
  <script type="text/javascript">
               function tjek(f){
                    var alerttekst=""
                    if(f.navn.value=="")alerttekst+="navn mangler\n"
                    if(f.gade.value=="")alerttekst+=" gade mangler\n"
                    if(f.by.value=="")alerttekst+=" by mangler\n"
                    if(!f.email.value.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,6}$/i))
                    alerttekst+=f.email.value+" er ikke en gyldig emailadresse"                                        
                    if (alerttekst=="")return true
                    else {
                         alert(alerttekst);
                         return false
                    }
               }
          </script>


</div>
<!-- End our left bottom box -->

<!-- Start right bottom box -->
<div id="bodyContainerBotRight" class="shadow">
	<h3 class="app">Brug for<a href="contact.php"> rådgivning? <img class="img_question" src="images/question.png" alt="question" title="rådgivning"></a></h3>
    	<p class="text"></p> 
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
