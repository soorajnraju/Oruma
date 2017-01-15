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
            <h2>Payment</h2>
            	<?php if(isset($balerror)){ ?>
                <div class="alert alert-danger">
                        <a href="<?php echo base_url('payment'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $balerror; ?></strong>
                </div><?php } ?>
            	<?php if(isset($error)){ ?>
                <div class="alert alert-danger">
                        <a href="<?php echo base_url('payment'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $error; ?></strong>
                </div><?php } ?>
                <?php if(isset($success)){ ?>
                <div class="alert alert-success">
                        <a href="<?php echo base_url('payment'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $success; ?></strong>
                </div><?php } ?>
            <form method="post" action="<?php echo base_url('payment_action'); ?>">
            	<table class="table table-responsive">
            		<tr><td>Customer Id</td><td><input type="email" name="cid" placeholder="Customer Id" required=""></td><td>Amount</td><td><input type="text" name="amount" placeholder="Amount" required="" pattern="[0-9]{1,4}" title="Digits only, range 1-9999"></td></tr>
            		<tr><td colspan="4"><input type="submit" name="submit" value="Do Payment" class="btn btn-success"></td></tr>
            	</table>
            </form>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>