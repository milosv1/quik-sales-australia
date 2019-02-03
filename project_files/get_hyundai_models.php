

<!DOCTYPE html>
<html>
        <head>
        <title>Hyundai Models</title>
        </head>

    <body>
    
      <!-- these are the needed bootstrap items header & Navigation of our page-->
       <?php include('includes/head.php'); ?>
      <?php include('includes/navigation.php'); ?>
         <?php 
         //connect to DB
         $db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');
         
         //check to see if it is a successful connection
         if( $db ) {
  
             echo "connection Established!"; //it is indeed successful.
  
                 } else{
                     
            echo "not connected!";
                     }
         
         //now me must run the query - the query needs to first be created in  MYSQL db.
         $query = "SELECT hyundai_id,hyundai_image,make,model,price,location FROM hyundai";
         
         $info = mysqli_query($db, $query);
         
         while($result = mysqli_fetch_assoc($info)){
                 //fetching the rows from the DB
                 $hyundai_id = $result['hyundai_id'];
                 $hyundai_image = $result['hyundai_image'];
                 $make = $result['make'];
                 $model = $result['model'];
                 $price = $result['price'];
                 $location = $result['location'];
                 
                 //now we can display the results onto our page
                 echo "<h4>$model</h4>";
                 echo "<p>$location</p>";
                 echo "<p>$make</p>";
                 echo "<p>$price</p>";
                 echo "<img src=\"images/$hyundai_image\">";
                 echo "<br></br>";
         }      
         ?>
         <!-- our footer also from Bootstrap.-->
      <?php include('includes/footer.php'); ?>   
    </body>

</html>