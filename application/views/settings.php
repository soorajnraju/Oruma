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
            <h2>Account Settings</h2><hr>
            <h3>Change Password</h3>
            <form action="<?php echo base_url('settings/updatePassword');?>" method="post">
            <table class="table table-responsive">
            <?php if(isset($success)){
                  ?>
                  <div class="alert alert-success">
                    <a href="<?php echo base_url('settings'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <?php echo $success; ?>
                  </div>
                  <?php } ?>
            <?php if(isset($error)){
                  ?>
                  <div class="alert alert-danger">
                    <a href="<?php echo base_url('settings'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed!</strong> <?php echo $error; ?>
                  </div>
                  <?php } ?>
            <?php if(isset($pwd)){
                  ?>
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed!</strong> <?php echo $pwd; ?>
                  </div>
                  <?php } ?>
            <tr><td>Password</td><td><input type="password" name="password" required="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)"></td></tr>
            <tr><td>Re-type Password</td><td><input type="password" name="repassword" required="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)"></td></tr>
            <tr><td colspan="2"><button type="submit" class="btn btn-primary">Change</button></td></tr>
            </table>
            </form>
	</div>
  <!--Footer Begin-->
  <?php include('footer.php') ?>
  <!--Footer Ends-->
</body>
</html>