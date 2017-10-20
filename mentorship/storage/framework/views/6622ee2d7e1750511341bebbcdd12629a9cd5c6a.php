<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome  </title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-image: url('../img/bg.jpg');
	}
</style>
</head>
<body>
	<?php echo $__env->make('profile.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
</body>	
<?php echo $__env->make('profile.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</html>



