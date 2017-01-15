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
		<div style="padding-bottom: 50px" class="table-responsive">
            <h2>News Management</h2>
            <form method="post" action="<?php echo base_url('news_man/publish'); ?>">
            <table class="table">
                <?php if(isset($error)){ ?>
                <div class="alert alert-danger">
                        <a href="<?php echo base_url('news_man'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $error; ?></strong>
                </div><?php } ?>
                <?php if(isset($success)){ ?>
                <div class="alert alert-success">
                        <a href="<?php echo base_url('news_man'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $success; ?></strong>
                </div><?php } ?>
            	<tr><td><h2>Title</h2></td></tr>
            	<tr><td><input type="text" name="title" style="width: 15cm" required=""></td><!--<td><font color="red"><b>Do you want to delete a post ? <a href="#" style="text-decoration: none;">Click here</a></b></font></td>--></tr>
            	<tr><td><h2>Post</h2></td></tr>
            	<tr><td><textarea name="content" style="width: 15cm; height: 15cm" required=""></textarea></td></tr>
            	<tr><td><button type="submit" class="btn btn-success">Publish</button>&nbsp<button type="reset" class="btn btn-danger">Reset</button></td></tr>
            </table>
            </form>
        </div>
	</div>
    <!--Footer Begin-->
    <?php include('footer.php') ?>
    <!--Footer Ends-->
</body>
</html>