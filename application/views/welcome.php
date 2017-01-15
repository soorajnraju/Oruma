<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
<style>
a.link{
text-decoration: none;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>

    <!--Menu Begin-->
    <?php include('menu.php') ?>
    <!--Menu Ends-->
    
    <div class="container">
        <div class="jumbotron text-center">
            <h2>ഒരുമ</h2>
            <p>പാല്‍ ഉല്‍പാധന-വിധരണ പ്രക്രിയയുടെ വിവിധ ഘട്ടങ്ങള്‍ കമ്പ്യൂട്ടര്‍ വല്‍ക്കരിക്കുക എന്ന ലക്ഷ്യത്തോടുകൂടി തുടങ്ങിവച്ച ഒരു സംരംഭം ആണ് ഒരുമ. ഞങ്ങള്‍ കേരള ക്ഷീര വികസന വകുപ്പുമായി യാതൊരു വിധത്തിലും ബന്ധപ്പെട്ടതല്ല എന്ന് ഓര്‍മിപ്പിച്ചു കൊള്ളട്ടെ</p>
        </div>
        <!--Slider Begin-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url('assets/img/cow/cow1.jpg'); ?>" alt="Cow">
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/img/cow/cow2.jpg'); ?>" alt="Cow">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('assets/img/cow/cow3.jpg'); ?>" alt="Cow">
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/img/cow/cow4.jpg'); ?>" alt="Cow">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        <!--Slider Ends-->
    </div>
    <?php include('footer.php');?>
</body>
</html>