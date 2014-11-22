<?php
	$h= false;
	$title= "RSVP";
	include('incl/header.php'); 
	print "\n\n"; 
?>

	<h3><?=$title?></h3>
	<?php if(isset($message)){ ?>
	<h3><?=$message?></h3>
	<?php } ?>
	<form class="rsvp" name="rsvp" method="post" onsubmit="return validate(this);">
		<div><label for="name">Name:</label><input type="text" name="name" placeholder="Your Full Name" required/></div>
		<div><label for="guest">Bringing a guest?</label><input type="radio" name="guest" value="yes" onClick="showGName(1);"/>Yes <input type="radio" name="guest" value="no" onClick="showGName(0);"/>No</div>
		<div id="gname"><label for="guest-name">Guest's Name:</label><input type="text" name="guest-name" placeholder="Your Guest's Full Name" required/></div>
		<div><label for="email">Email:</label><input type="email" name="email" placeholder="Email Address" required/></div>
		<div><label for="name">Phone:</label><input type="tel" name="phone" placeholder="xxx-xxx-xxxx" /></div>
		<div><label for="name">Invite Code:</label><input type="text" name="code" placeholder="Check Your Invite!" /></div>
		<input type="hidden"name="subject" value="RSVP" />
		<div><input type="submit" name="submit" value="submit" /></div>
	</form>

<?php
	print "\n\n"; 
	include('incl/footer.php'); 
?>