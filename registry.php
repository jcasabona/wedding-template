<?php
	$h= false;
	$title= "Gift Registries";
	include('incl/header.php'); 
	print "\n\n"; 
?>

	<h3><?=$title?></h3>

<div class="polaroid"><img src="img/registry.jpg" /></div>
<p>We are registered with the following places:</p>

<dl class="registry">
	<dt><a href="#">Macy's</a></dt>
	<dd>Go to <a href="#">the website</a> and search for Customer #99009890</dd>
	
	<dt><a href="#">Bed, Bath, and Beyond</a></dt>
	<dd>You can find our Bed' Bath, and Beyond Registry <a href="#">here</a>.</dd>
	
	<dt><a href="#">Amazon.com</a></dt>
	<dd>View our Amazon.com <a href="#">Wishlist</a></dd>
</dl>

<?php
	print "\n\n"; 
	include('incl/footer.php'); 
?>