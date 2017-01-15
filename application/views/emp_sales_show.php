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
		<h2 align="center" style="text-align: center">Milk sales details between two days</h2>
	<form method="post" action="emp_sales_show/getdata">
		<table class="table table-responsive">
			<tr><td>Start Date</td><td><input type="date" name="startdate" placeholder="Start Date" required=""></td><td>End Date</td><td><input type="date" name="enddate" placeholder="End Date" required=""></td></tr>
			<tr><td colspan="4"><input type="submit" name="submit" value="Show Sales" class="btn btn-success"></td></tr>
		</table>
	</form>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</html>