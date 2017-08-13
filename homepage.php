<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Amatic+SC:700');
	body
	{
		font-size: 100px;
		font-family: 'Amatic SC', cursive;
		background-image: url(back2.jpg);
		background-repeat: no-repeat;
		background-size: 100% 720px;
	}
</style>
</head>
<body>
<p>
	<?php 
session_start();
echo "Welcome " . $_SESSION['username'];
?>
</p>
</body>
</html>
