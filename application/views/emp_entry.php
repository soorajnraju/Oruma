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
		<h2 align="center" style="text-align: center">Milk purchase details between two days</h2>
	<form method="post" action="<?php echo base_url('emp_show_entry'); ?>">
		<table class="table table-responsive">
			<tr><td>Start Date</td><td><input type="date" name="startdate" placeholder="Start Date" required=""></td><td>End Date</td><td><input type="date" name="enddate" placeholder="End Date" required=""></td></tr>
			<tr><td colspan="4"><input type="submit" name="submit" value="Show Purchase" class="btn btn-success"></td></tr>
		</table>
	</form>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</html>