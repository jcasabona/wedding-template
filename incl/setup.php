<?php
/**SITE SET-UP INFORMATION**/

$siteName= "Amy &amp; Bobby";
$description= "";
$keywords= "";

include_once('procForm.php');

if(isset($_POST['submit'])){
	if(isset($_POST['sendTo'])){ $f= new procForm($_POST['sendTo']); }
	else{ $f= new procForm("joe@casabona.org"); }
	$_POST['subject']= (isset($_POST['subject'])) ? $_POST['subject'] : "Contact form from $siteName's Wedding Website";
	$message= $f->email($_POST['subject'], $f->buildMsg($_POST), $_POST['email']);
}

?>