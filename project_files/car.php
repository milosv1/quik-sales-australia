<!-- This page will contain the list of vehicles from The DB. once selected it will lead to the detail.php--> 

<!DOCTYPE html>
<html>
  <head>
    <title>Current Stock Available</title>
  </head>
  
  <body>
    
     <?php include('includes/head.php'); ?>
    <?php include('includes/navigation.php'); ?>
    
<?php

$db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');

if( $db ){
  
  echo "connection Established!";
  
}
else
{
  echo "not connected!";
}

//query
  $query = "SELECT car_id,model,make,location,price,car_image FROM car";
  
  
  $info = mysqli_query($db, $query);
 
   while($result = mysqli_fetch_assoc($info)){
      
      
      $id = $result['car_id'];
      $model = $result['model'];
      $make = $result['make'];
      $location = $result['location'];
      $price = $result['price'];
      $car_image = $result['car_image'];
      
      
   //   echo "<h4>vehicle ID: $id</h1>";
      echo "<h4>$model</h4>";
      echo "<p>$location</p>"; //test
      echo "<p>$make</p>";
      echo "<p>$ $price</p>";
      echo "<img src=\"images/$car_image\">";
      echo "<br></br>";
      echo "<a href=\"detail.php?id=$id\">More on this $model from $location!</a>";
      echo "<br></br>";

   }
      
 

?>
    <?php include('includes/footer.php'); ?>
  </body>
</html>
