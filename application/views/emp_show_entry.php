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
		<?php if($query->num_rows()>0) { ?>
		<h2 align="center">Milk purchase details</h2>
		<table class="table table-responsive">
			<tr><th>Username</th><th>Date</th><th>Quanity</th><th>Price</th></tr>
			<?php foreach($query->result() as $row){ ?>
			<tr><td><?php echo $row->username; ?></td><td><?php echo $row->date; ?></td><td><?php echo $row->quantity; ?></td><td><?php echo $row->price; ?></td></tr>
			<?php } ?>

		</table>
		<?php } else {?><h2>No entries found</h2><?php } ?>
	</div>
	
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</html>