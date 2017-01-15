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
                          <tr><td>Add New Employee</td><td><a href="<?php echo base_url('new_emp'); ?>"><img src="<?php echo base_url('assets/img/newuser.png'); ?>" width="50px" height="50px"></a></td></tr>
			<tr><td>Add New News</td><td><a href="<?php echo base_url('news_man');?>" class="link"><img src="<?php echo base_url('assets/img/news.jpg'); ?>" width="50px" height="50px"></a></td></tr>
			<tr><td>Delete News</td><td><a href="<?php echo base_url('news_del');?>" class="link"><img src="<?php echo base_url('assets/img/trash.png'); ?>" width="50px" height="50px"></a></td></tr>
			<tr><td>Price Update</td><td><a href="<?php echo base_url('price_change');?>" class="link"><img src="<?php echo base_url('assets/img/update.png'); ?>" width="50px" height="50px"></a></td></tr>
		</table>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>