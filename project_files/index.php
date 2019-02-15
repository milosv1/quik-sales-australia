 <!DOCTYPE html>
<html>
 
<body>
 <?php include('includes/head.php'); ?>
<?php include('includes/navigation.php'); ?>
<?php include('project_files/server.php'); ?>
<?php include('include/server.php'); ?>

 
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="d-block w-100 " src="mazda.jpg" alt="First slide">
      </div>
       <div class="carousel-item ">
        <img class="d-block w-100 " src="mazdatwo.jpg" alt="Second slide">
      </div>
       <div class="carousel-item ">
        <img class="d-block w-100 " src="holden.jpg" alt="third slide">
        
      </div>
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

 <div class="container" >
 
   <h2 class="categoriesText">Our current partners</h2>
  <div class = "row">
   <div class ="col-md-3">
    <!-- Please make this logo clickable -> it should lead to get_toyota_Models.php-->
     <a href="get_model.php?make=toyota" class="btn btn-primary">Toyota</a>
      <a href="get_model.php?make=hyundai" class="btn btn-primary">Hyundai</a>
      <a href="car.php" class="btn btn-primary">All Cars</a>
     
  </div>
   <div class ="col-md-2">
   
    <!-- Also make this logo clickable -> it should lead to get_hyundai_models.php-->
   
   <!--<a href="showcar.php?brand=hyundai" class="btn btn-primary">Hyundai</a>-->
   
   <!--<img src="hundai_logo.Jpg" class= "inline-block w-100 h-100 " >-->
   
    <!--<a href="$get_model.php" class ="nav_link">Hyundai</a>-->
 
   
  </div>
  </div>
  </div>
  <div class="my-4" style="width: 200px;"></div>
  
 <?php include('includes/footer.php'); ?>
 
</body>

</html>







