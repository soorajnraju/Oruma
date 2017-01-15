<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
<style>
.error{
	font-weight: bold;
	color: red;
	padding-left: 20%;
	padding-right: 20%;
	padding-top: 0%;
	padding-bottom: 0%;
}
</style>
</head>
<body>

	<!--Menu Begin-->
	<?php include('menu.php') ?>
	<!--Menu Ends-->
	
	<div class="container">
		<div class="error">
			<img src="<?php echo base_url('assets/img/404.png'); ?>" class="img-responsive" alt="ERROR 404">
		</div>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>