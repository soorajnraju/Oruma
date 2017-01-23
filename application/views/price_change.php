<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
<style>
a.link{
text-decoration: none;
}
</style>
</head>
<body>

	<!--Menu Begin-->
	<?php include('menu.php') ?>
	<!--Menu Ends-->
	
	<div class="container">
		<table class="table table-responsive">
			<form method="post" action="<?php echo base_url('price_change/change'); ?>">
				<tr><td>Current Purchase Price</td><td><?php if(isset($p_price)) echo "<h2>".$p_price."</h2>"; ?></td></tr>
				<tr><td>Current Sales Price</td><td><?php if(isset($s_price)) echo "<h2>".$s_price."</h2>"; ?></td></tr>
				<tr><td>Purchase Price</td><td><input type="text" name="p_price" required="" pattern="[0-9]{1,2}" title="Number only, range 1-99"></td></tr>
				<tr><td>Sales Price</td><td><input type="text" name="s_price" required="" pattern="[0-9]{1,2}" title="Number only, range 1-99"></td></tr>
				<tr><td colspan="2"><button type="submit" class="btn btn-primary">Update</button></td></tr>
				<tr><td colspan="2"><?php if(isset($message)) echo "<h2>".$message."</h2>"; ?></td></tr>
			</form>
		</table>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>