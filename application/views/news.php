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
      <div class="row">
      <div class="col-lg-12 col-md-9 col-sm-6">
          <h4><small>RECENT POSTS</small></h4>
        	<?php if ($query->num_rows()>0) { ?>
        	<?php foreach ($query->result() as $row) { ?>
          <hr>
          <h2><?php echo $row->title; ?></h2>
          <h5><span class="glyphicon glyphicon-time"></span><?php echo $row->date; ?></h5>
          <p><?php echo $row->content; ?></p>
          <br><br>
        	<?php } 
          } 
          else {?>
        	<h2>We don't have any post yet</h2> <?php } ?>
      </div>
    </div>
  </div>
  <!--Footer Begin-->
  <?php include('footer.php') ?>
  <!--Footer Ends-->
</body>
</html>