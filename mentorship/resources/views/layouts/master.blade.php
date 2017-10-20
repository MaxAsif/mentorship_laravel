<!--
	It is the master page which is used it other pages 
	It includes navbar and footer
	It also contains a section for contents which is filled accordingly
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/p.png">
	<title>Welcome to Mentorship-Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='stylesheet' href='css/social_icon.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</head>
<body>
	
	@include('layouts.navbar')
	<br><br>
	@yield('contents')
	@include('layouts.footer');

</body>
</html>