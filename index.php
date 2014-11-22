<?php
	$h= true;
	$title= "Home";
	include('incl/header.php'); 
	print "\n\n"; 
?>


<div id="home" class="group">
<div class="polaroid left">
	<img src="img/couple.jpg" alt="<?=$siteName?>" />
	<p>Summer 2010</p>
</div>

<h2>We're Getting Married!</h2>
<h3>In <strong>50</strong> Days...<br/>
@ Our Lady of <strong>Mt. Carmel Church</strong> (2pm)<br/>
Followed by a Reception at the <strong>Hannton Hotel</strong> (5pm).</h3>
</div>

<p>We hope you can make it! Just <a href="rsvp.php">RSVP here</a> to let us know!</p>

<p class="sig">
xoxo,<br/>Amy &amp; Bobby
</p>

<?php
	print "\n\n"; 
	include('incl/footer.php'); 
?>