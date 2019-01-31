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
          <img class="d-block w-100 h-100 " src="mazda.jpg" alt="First slide">
          <?php // this is a test echo "<p>". "test". $firstname['firstname'] ."</p>"; ?>
      </div>
       <div class="carousel-item ">
        <img class="d-block w-100 h-100" src="mazdatwo.jpg" alt="Second slide">
      </div>
       <div class="carousel-item ">
        <img class="d-block w-100  h-100" src="holden.jpg" alt="third slide">
        
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
 
 <?php include('includes/footer.php'); ?>
 
</body>

</html>







