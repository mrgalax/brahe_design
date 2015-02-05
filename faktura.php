<?php

// hvis brugernavn er sat og password er sat.
if(isset($_POST['brugernavn']) && isset($_POST['password'])) {
	
	if(!($_POST['brugernavn'] == "mads" && $_POST ['password'] == "sune")) {
		header(" Location: pwd.html" );
		
		}
		
		}  else header ( "Location: pwd.html");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<title>Fakturafil</title>
	<meta http-equiv="content-type” content="text/html;charset=utf-8" />
</head>
<body>

