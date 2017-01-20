<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<div id="chat_box">
			<div id="chat_data">
				<span style="color:green">Junu: </span>
				<span style="color: blue">How you are?</span>
				<span style="float: right">12:30pm</span>
			</div>
		</div>
		
		<form method="post" action="index.php">
			<input type="text" name="fullname" placeholder="Your Name">
			<textarea name="message" placeholder="Enter Message"></textarea>
			<input type="submit" name="submit" value="Send">
		</form>
	</div>

</body>
</html>