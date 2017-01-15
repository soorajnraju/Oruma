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
			<?php if ($query->num_rows()>0) {
				echo "<tr><th>Post Id</th><th>Post Date</th><th>Post Title</th></tr>";
        	foreach ($query->result() as $row) { ?>
			<tr><td><?php echo $row->postid; ?></td><td><?php echo $row->date; ?></td><td><?php echo $row->title; ?></td><td><button onclick="location.href='<?php echo base_url('news_del/delete/'); echo $row->postid; ?>'">Delete</button></td></tr> <?php } }
			else {
				echo "<h2>No Posts Available</h2>";
				} ?>
		</table>
	</div>
	<!--Footer Begin-->
	<?php include('footer.php') ?>
	<!--Footer Ends-->
</body>
</html>