<?php 
//what we capture.
//$id = $_GET['id'];

//our connection to the DB
//$db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');

//if($db){
 //echo "Connection established";
 
//}else{
 
// echo "Connection Failed!";
//}


//$query = 'SELECT car_id, make,model,price FROM car WHERE car_id = ?';

//$statement =  $db -> prepare($query);

//$statement -> bind_param('i',$id);

//$statement -> execute();

//$result = $statement -> get_result();

//$row = $result -> fetch_assoc();

//print_r($row);
//$car_id = $row['car_id'];
//$make = $row['make'];
//$model = $row['model'];
//$price = $row['price'];


//echo "<h1>$car_id</h1>";
//echo "<p>$make</p>";
//echo "<p>$model</p>";
//echo "<p>$price</p>";




?>
<!DOCTYPE html>
<html>
 <title>Detail of Vehicle</title>
  <body>
     <?php include('includes/head.php'); ?>
  <?php include('includes/navigation.php'); ?>
  
       <!--<div class="banner-content banner-content-center"> -->
         
       <div class="container" >
        <div class= "row">
 <?php 
//what we capture.
 $id = $_GET['id'];

//our connection to the DB
 $db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');

  if($db){
      //echo "Connection established";
 
        }else{
 
         echo "Connection Failed!";
           }

 //our Query which takes out the following items from the DB
   $query = 'SELECT car_id, make,model,price,car_image FROM car WHERE car_id = ?';

   $statement =  $db -> prepare($query);

   $statement -> bind_param('i',$id);

   $statement -> execute();

   $result = $statement -> get_result();

   $row = $result -> fetch_assoc();
  ?>
  
  <div class="container">
    <div class="row">
     <?php
   //print_r($row);
     $car_id = $row['car_id'];
     $make = $row['make'];
     $model = $row['model'];
     $price = $row['price'];
     
     $car_image = $row['car_image'];
   
   
     echo "<div class=\"col-md-6\">";
     //echo "<h1>$car_id</h1>";
     echo "<h4>$model</h4>";
     echo "<p>Make: $make</p>";
     echo "<p>Price: $$price</p>";
     echo "</div>";
     
     echo "<div class=\"col-md-6\">";
     echo "<img src=\"images/$car_image\">";
     
     echo "<br></br>";
     echo "</div>";
   
   
   ?>
    </div>
  </div>
  
</div>
  </div>    
          
       <!--</div>-->
      <?php include('includes/footer.php'); ?>
     </body>
     
</html>