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
		 		<?php if(isset($error)){ ?>
                <div class="alert alert-danger">
                        <a href="<?php echo base_url('emp_sales_new'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $error; ?></strong>
                </div><?php } ?>
                <?php if(isset($warning)){ ?>
                <div class="alert alert-danger">
                        <a href="<?php echo base_url('emp_sales_new'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $warning; ?></strong>
                </div><?php } ?>
                <?php if(isset($success)){ ?>
                <div class="alert alert-success">
                        <a href="<?php echo base_url('emp_sales_new'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $success; ?></strong>
                </div><?php } ?>
		<form method="post" action="<?php echo base_url('emp_sales_new/addSale'); ?>">
		<table class="table table-responsive">
			<h2>New Sale</h2>
			<tr><td>Customer Name</td><td><input type="text" name="cname" placeholder="Customer Name" required="" pattern="[a-z A-Z]{1,49}" title="Alphabets only"></td><td>Milk Quantity</td><td><input type="text" name="quantity" placeholder="Quantity" required=""  pattern="[0-9]{1,3}" title="Number only, range 1-999"></td></tr>
			<tr><td colspan="4"><input type="submit" name="submit" value="Submit" class="btn btn-success"></td></tr>
		</table>
		</form>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>