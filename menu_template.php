<?php
$portfolio = "myButtons";
$contact = "myButtons";
$services = "myButtons";
$partners = "myButtons";
$index = "myButtons";
//This line gets the file name without the dot and extension
$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if ($menuLinkid == "portfolio") {
	$portfolio = 'myActiveButton';
} else if ($menuLinkid == "contact") {
	$contact = 'myActiveButton';
} else if ($menuLinkid == "services") {
	$services = 'myActiveButton';
} else if ($menuLinkid == "partners") {
	$partners = 'myActiveButton';
} else if ($menuLinkid == "index") {
	$index = 'myActiveButton';
}
?>
<a class="<?php echo $portfolio; ?>" href="portfolio.php"><p>PORTFOLIO</p></a>
<a class="<?php echo $contact; ?>" href="contact.php"><p>KONTAKT</p></a>
<a class="<?php echo $services; ?>" href="services.php"><p>SERVICES</p></a>
<a class="<?php echo $partners; ?>" href="partners.php"><p>OM OS</p></a>
<a class="<?php echo $index; ?>" href="index.php"><p>HJEM</p></a>