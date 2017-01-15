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
    	<div>
    	<form method="post" action="<?php echo base_url('new_profile/register');?>">
    	<table class="table table-responsive">
    		<?php if(isset($smsg)) {?>
    		<div class="alert alert-success">
						<a href="<?php echo base_url('new_profile'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $smsg ?></strong>
			</div><?php } ?>

			<?php if(isset($emsg)) {?>
    		<div class="alert alert-danger">
						<a href="<?php echo base_url('new_profile'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $emsg ?></strong>
			</div><?php } ?>

			<?php if(isset($error)) {?>
    		<div class="alert alert-danger">
						<a href="<?php echo base_url('new_profile'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $error ?></strong>
			</div><?php } ?>

			<?php if(isset($other)) {?>
    		<div class="alert alert-danger">
						<a href="<?php echo base_url('new_profile'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $other ?></strong>
			</div><?php } ?>

    		<tr><th colspan="4"><h2>Customer Registration</h2></th></tr>
			<tr><td>FirstName</td><td><input type="text" name="fname" placeholder="First Name" required="" pattern="[a-zA-Z]{1,49}" title="Alphabets only, with no space"></td><td>LastName</td><td><input type="text" name="lname" placeholder="Last Name" required="" pattern="[a-z A-Z]{1,49}" title="Alphabets only, with no space"></td></tr>

			<tr><td>Email</td><td><input type="email" name="email" placeholder="Email" required=""></td><td>Phone</td><td><input type="text" name="phone" placeholder="Phone" required="" pattern="[0-9]{10,10}" title="Mobile phone number with 10 digits"></td></tr>
			
			<tr><td>Address</td><td><input type="text" name="address" placeholder="Address" required="" pattern="[a-z A-Z0-9]{1,99}" title="Alpha-Numeric only"></td><td>City</td><td><input type="text" name="city" placeholder="City" required="" pattern="[a-zA-Z]{1,49}" title="Alphabets only"></td></tr>

			<tr><td>Province</td><td><input type="text" name="province" placeholder="Province" required="" pattern="[a-zA-Z]{1,49}" title="Alphabets only"></td><td>PIN</td><td><input type="text" name="pin" placeholder="PIN" required="" pattern="[0-9]{6,6}" title="6 digit PIN"></td></tr>

			<tr><td><button type="submit" name="submit" class="btn btn-success">Register</button></td><td><button type="reset" name="reset" class="btn btn-danger">Reset</button></td></tr>
    	</table>
    	</form>
    	</div>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>