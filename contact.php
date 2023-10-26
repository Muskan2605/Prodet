<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<form method="POST" action="http://localhost/contact/con_connect.php">
				<input type="text" class="field" placeholder="Your Name" name="name" required>
				<input type="text" class="field" placeholder="Your Email" name="email" required>
				<input type="text" class="field" placeholder="Phone" name="mobile" required>
				<textarea placeholder="Message" class="field" name="comment" required></textarea>
				<input type="submit" class="btn" name="submit">
				<form>
			</div>
		</div>
	</div>
</body>
</html>