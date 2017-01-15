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
		<?php if($query->num_rows()>0)
		{ 
		$row=$query->result();
		$stock=$row[0]->quantity;
		?>
		<h2 align="center">Current Stock</h2>
		<table class="table table-responsive" style="text-align: center">
			<tr><td><h2><?php echo $stock; ?>&nbspL</h2></td></tr>
		</table>
		<?php }
		else {?>
				<h2>We don't have any stock yet</h2>
			<?php }?>
	</div>
	
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</html>