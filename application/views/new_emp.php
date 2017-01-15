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
            <h2>Add An Employee</h2>
            <form method="post" action="<?php echo base_url('new_emp/regemp'); ?>">
                <table class="table table-responsive">
                    <?php if(isset($success))
					{ ?>
					<div class="alert alert-success">
						<a href="<?php echo base_url('new_emp'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $success; ?></strong> 
					</div>
					<?php }
					if(isset($error))
					{
					?>
					<div class="alert alert-danger">
						<a href="<?php echo base_url('new_emp'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $error; ?></strong>
					</div>
					<?php } ?>
                    <tr><td>Username</td><td><input type="text" name="username" required="" pattern="[a-zA-Z]{1,49}" title="Alphabets without space"></td></tr>
                    <tr><td>Password</td><td><input type="text" name="password" required="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)"></td></tr>
                    <tr><td><button type="submit" class="btn btn-success">Submit</button></td><td><button type="reset" class="btn btn-danger">Reset</button></td></tr>
                </table>
            </form>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>