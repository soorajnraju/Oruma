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
					<tr><th>Task</th><th>Action</th></tr>
					<tr><th colspan="2">Profile Management</th></tr>
                    <tr><td>Add New Profile</td><td><a href="<?php echo base_url('new_profile'); ?>"><img src="<?php echo base_url('assets/img/newuser.png'); ?>" width="50px" height="50px"></a></td></tr>
					<tr><th colspan="2">Purchase Management</th></tr>
                    <tr><td>Add New Entry</td><td><a href="<?php echo base_url('new_entry');?>"><img src="<?php echo base_url('assets/img/addentry.png'); ?>" width="50px" height="50px"></a></td></tr>
                    <tr><td>Show Entry</td><td><a href="<?php echo base_url('emp_entry'); ?>"><img src="<?php echo base_url('assets/img/details.png'); ?>" width="50px" height="50px"></a></td></tr>
                    <tr><th colspan="2">Sales Management</th></tr>
                    <tr><td>Add New Entry</td><td><a href="emp_sales_new"><img src="<?php echo base_url('assets/img/addentry.png'); ?>" width="50px" height="50px"></a></td></tr>
                    <tr><td>Show Entry</td><td><a href="<?php echo base_url('emp_sales_show'); ?>"><img src="<?php echo base_url('assets/img/details.png'); ?>" width="50px" height="50px"></a></td></tr>
                    <tr><th colspan="2">Stock</th></tr>
                    <tr><td>View Stock</td><td><a href="<?php echo base_url('stock'); ?>"><img src="<?php echo base_url('assets/img/stock.png'); ?>" width="50px" height="50px"></a></td></tr>
                    <tr><th colspan="2">Payment</th></tr>
                    <tr><td>Make Payment</td><td><a href="<?php echo base_url('payment'); ?>"><img src="<?php echo base_url('assets/img/payment.png'); ?>" width="50px" height="50px"></a></td></tr>
		</table>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>