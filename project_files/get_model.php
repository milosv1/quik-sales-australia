<!DOCTYPE html>
<html>
        <head>
        <title>Models</title>
        </head>

    <body>
        <!--<h1>Welcome! <?php $_SESSION['email']; ?> </h1>-->
      <!-- these are the needed bootstrap items header & Navigation of our page-->
       <?php include('includes/head.php'); ?>
      <?php include('includes/navigation.php'); ?>
         <?php 
         //connect to DB
         $db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');
         
         //check to see if it is a successful connection
         if( $db ) {
  
            //  echo "connection Established!"; //it is indeed successful.
  
                 } else{
                     
            echo "not connected!";
                     }
         
         //car make from GET
         $model = $_GET['model'];
         //now me must run the query - the query needs to first be created in  MYSQL db.
         $query = "SELECT * FROM car WHERE make= ? ";
         
         $statement = $db -> prepare($query);
         $statement -> bind_param('s', $make );
         $statement -> execute();
         $result = $statement -> get_result();
         ?>
         <div class="container">
             <div class="row">
                  <?php
                 if( $result -> num_rows > 0 ){
                      while($row = $result -> fetch_assoc() ){
                         //fetching the rows from the DB
                         $car_id = $row['car_id'];
                         $car_image = $row['car_image'];
                         $make = $row['make'];
                         $model = $row['model'];
                         $price = $row['price'];
                         $location = $row['location'];
                         
                         //now we can display the results onto our page
                         echo "<div class=\"col-md-4\">";
                         echo "<h4>$model</h4>";
                         echo "<p>Location: $location</p>";
                         echo "<p>Make: $make</p>";
                         echo "<p>Price: $$price</p>";
                         echo "<img src=\"images/$car_image\">";
                         echo "<br></br>";
                         echo "</div>";
                    }   
                 }
                 //$info = mysqli_query($db, $query);
                 
                   
                 ?>
             </div>
         </div>
         
        
         <!-- our footer also from Bootstrap.-->
      <?php include('includes/footer.php'); ?>   
    </body>

</html>