<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
<style>
.login{
	padding-left: 20%;
	padding-right: 20%;
	padding-top: 10%;
	padding-bottom: 10%;
}
</style>
</head>
<body>

	<!--Menu Begin-->
	<div class="navbar navbar-default">
	    <div class="container">
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="<?php echo base_url(); ?>">ഒരുമ</a>
	        </div>
	        <center>
	            <div class="navbar-collapse collapse" id="navbar-main">
	                <ul class="nav navbar-nav">
	                    <li><a href="<?php echo base_url(); ?>">Home</a>
	                    </li>
	                    <li><a href="<?php echo base_url('news'); ?>">News</a>
	                    </li>
	                    <li><a href="<?php echo base_url('about'); ?>">About Us</a>
	                    </li>
	                    <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a>
	                    </li>
	                </ul>
	            </div>
	        </center>
	    </div>
	</div>
	<!--Menu Ends-->
	
	<div class="container">
	<div class="table-responsive login">
	<form name="login" method="post" action="<?php echo base_url('user/verify');?>">
		<table class="table">
		<?php if(isset($error)){ ?>
		<div class="alert alert-danger">
						<a href="<?php echo base_url('user/login'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $error;?></strong>
		</div><?php } ?>
		<tr><th colspan="2"><h2>Login</h2></th></tr>
		<tr><td>Username</td><td><input type="text" name="username" placeholder="Username"></td></tr>
		<tr><td>Password</td><td><input type="password" name="password" placeholder="Password"></td></tr>
		<tr><td><button type="submit" name="login" class="btn btn-primary">Login</button></td></tr>
		</table>
	</form>
	</div>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>