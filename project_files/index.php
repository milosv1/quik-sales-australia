 <!DOCTYPE html>
<html>

<body>
 <?php include('includes/head.php'); ?>
<?php include('includes/navigation.php'); ?>
<?php include('includes/project_images'); ?>
<?php include('project_files/server.php'); ?>


 
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

 <div  class="container" >
  <h2>Catergories</h2>
  <div class = "row">
   <div class ="col-md-2">
    <!-- Please make this logo clickable -> it should lead to get_toyota_Models.php-->
    <img src="Toyota_logo.Jpg"  class="d-block w-100 h-100" > 
     
  </div>
   <div class ="col-md-2">
    <!-- Also make this logo clickable -> it should lead to get_hyundai_models.php-->
   <img src="hundai_logo.Jpg" class="inline-block w-100 h-100 " >
 </div>
  </div>
  </div>
  <div class="my-4" style="width: 200px;"></div>
  

  
 <?php include('includes/footer.php'); ?>
 
</body>

</html>







