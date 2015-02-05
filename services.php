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
			   echo "<div class='varer'>";
               //echo "<h3 class='nyhed'>" . $this->navn  ."</h3><br />";
               echo "<img src='" . $this->billede . "' alt='" . $this->navn . "' /><br />";
			   //echo "<p class='text_katalog'>";
               echo $this->beskrivelse . "<br /><br />";
			   echo "<hr />";
               echo "<h3><b><u>Pris kr. " . $this->pris . "</b></u></h3><br />";
               echo "<form method='get' action='' >";
               echo "<input type='hidden' name='vnr' value='".$this->vnr . "' />";
               echo "<select name='antal'>";
               echo "<option value='1' selected='selected'>1 designer</option>";
               echo "<option value='3'>3 designere</option>";
               echo "<option value='5'>5 designere</option>";
               echo "</select>";
               echo "<br /><input class='submit' type='submit' value='Tilføj'  />";
               echo "</form>";
			   echo "</div>";

	   }
}

 function list_katalog(){
          //echo "<h1>Varer</h1>";
          foreach($_SESSION['katalog'] as $envare) $envare->udskriv();
}
 function list_kurv(){
          //echo "<h3><img class='cart' src='images/cart.png' width='32px' height='32px' border='0'/></h3>";
          $total=0;
          foreach($_SESSION['kurv'] as $vnr => $antal){
                 echo $antal." dsg ";    
                 echo $_SESSION['katalog'][$vnr]->navn." ";
                 $pris=$_SESSION['katalog'][$vnr]->pris;
                 //echo " stykpris: ".$pris; 
                 echo " kr. ".$antal*$pris." ";
                 echo "<a href='?slet=ja&vnr=" . $vnr . "'>";
				 echo "<img src='images/cancel.png' class='fortryd' alt='fortryd' />";
				 echo "</a><br />"; 
                 $total+=$antal*$pris;
            }
          if($total>0) {
			  echo "<p class='text'>Varekøb ialt kr. ".$total;
		  	  echo "<br /><br /><a href='?kasse=ja'><input type='button' class='submit' value='til kassen' /></a>";
			  //echo "<br /><br /><a href='kasse.php'><input type='button' class='submit' value='til kassen' /></a>";
		  } else {
              echo "<p class='text'>kurven er tom";
		  }
}

 function list_kundeinfo() {
	echo "<div id='kundeinfo' class='shadow'>";
	echo "<h3 class='nyhed'>Varen skal sendes til:</h3>";
		echo "<form action='betaling.php' method='get' onsubmit='if(tjek(this)) return true; else return false'>
		<input class='address' type='text' style='color:#999999' name='navn' size='35' value='navn' onClick=this.value='' /><br />
		<input class='address' type='text' style='color:#999999' name='gade' size='35' value='gade' onClick=this.value='' /><br />
		<input class='address' type='text' style='color:#999999' name='by' size='35' value='by' onClick=this.value='' /><br />
		<input class='email' type='text' style='color:#999999' name='email' size='35' value='email' onClick=this.value='' /><br />
		<a href='services.php'><input type='button' class='cancel' value='Køb mere' /></a>
		<input type='submit' class='submit' value='BETAL'  />
 	</form>";
	echo "</div>";
	 
}

if(!isset($_SESSION['kurv']))
$_SESSION['kurv']=Array();
 
if(isset($_GET['vnr']) && isset($_GET['antal']))
$_SESSION['kurv'][$_GET['vnr']]=$_GET['antal']; 

if(isset($_GET['slet'])) unset($_SESSION['kurv'][$_GET['vnr']]);

if(!isset($_SESSION['katalog'])){
}
	
	$katalog=array();
	
          $a=new Vare();
          $a->vnr=10;
          $a->navn="Pakke 1";
          $a->billede="images/Package.png";
          $a->pris="1000";
          $a->beskrivelse="Basis pakke.<br /><br /> Inkluderer 20 arbejds timer, 2 personlige møder, op til 2 prototyper.";
      //læg varen ind i kataloget
          $katalog[10]=$a;
          
          $b=new Vare();
          $b->vnr=20;
          $b->navn="Pakke 2";
          $b->billede="images/Package2.png";
          $b->pris="2000";
          $b->beskrivelse="Extend pakke.<br /><br /><br /><br /> Inkluderer 80 arbejds timer, op til 4 personlige møder, op til 4 prototyper og en salgs-strategi.";
          $katalog[20]=$b;
          
          $c=new Vare();
          $c->vnr=30;
          $c->navn="Pakke 3";
          $c->billede="images/Package3.png";
          $c->pris="3000";
          $c->beskrivelse="Full pakke.<br /><br /><br /> Inkluderer 200 arbejds timer, mulighed for personlige møder gennem hvert design stadie, op til 5 prototyper og en salgs-strategi.";
          $katalog[30]=$c;
		       
     //gem katalog som session-variabel
          $_SESSION['katalog']=$katalog;
	

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
	<li class="li_social"><a href="http://www.facebook.com/pages/BRAHE-DESIGN/187958574612645"><img src="images/Facebook-icon.png" alt="facebook" title="visit brahe-designs facebook page" width="24" height="24" onmouseover="this.src='images/Facebook2-icon.png'" onmouseout="this.src='images/Facebook-icon.png'"></a></li>
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

<!-- Start our catalog merchandice -->
<div id="varer">  	
				<?php
				if(!isset($_GET['kasse']))
                   list_katalog(); 
				else list_kundeinfo();    
		        ?>
                 <div id="kurv" class="shadow">
                 <img class='cart' src='images/cart.png' width='32px' height='32px'/>
                 <?php list_kurv() ?>
        		</div>				  			  
		</div>
    
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
<!-- End our catalog merchandice -->

<!-- Start right bottom box -->
<div id="bodyContainerBotRight" class="shadow">
	<h3 class="app">Brug for<a href="contact.php"> rådgivning? <img class="img_question" src="images/question.png" alt="question" title="rådgivning"></a></h3>
    	<p class="text"></p> 
</div>
<!-- End our right bottom box -->

<!-- Start left bottom box -->
<div id="bodyContainerBotLeft" class="shadow">
		<h3 class="nyhed">Vælg en pakke til din ide.</h3>
        <p class="text">
        	Bestiller du en pakke hos os, kan du selv vælge hvor mange designere der skal arbejde med din ide.
            Hver designer vil levere det antal prototyper pakken lover, dvs. en basis pakke med 3 designere, resulterer i mindst
            6 prototyper/designs. Det hele starter selvfølgelig med et personligt møde, hvor vi i samarbejde med dig, vil komme frem 
            til hvordan vi bedst får din ide bragt til verden.</p>
</div>
<!-- End our left bottom box -->

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
