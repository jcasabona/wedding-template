<?php
	$h= false;
	$title= "Contact Us";
	include('incl/header.php'); 
	print "\n\n"; 
?>


	<h3><?=$title?></h3>
	<?php if(isset($message)){ ?>
	<h3><?=$message?></h3>
	<?php } ?>
	
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	<form name="contact-us" method="post">
		<div><label for="name">Name:</label><input type="text" name="name" placeholder="Your Full Name" required/></div>
		<div><label for="email">Email:</label><input type="email" name="email" placeholder="Email Address" required/></div>
		<div><label for="phone">Phone:</label><input type="tel" name="phone" placeholder="xxx-xxx-xxxx" /></div>
		<div><label for="Message">Message:</label> <textarea name="message" placeholder="Type Your Message Here" required></textarea></div>
		<div><input type="submit" name="submit" value="submit" /></div>
	</form>

<?php
	print "\n\n"; 
	include('incl/footer.php'); 
?>