<!--this i also part of the Categories section. -->
<!--this only shows Toyota Models -->
<!DOCTYPE html>
<html>
        <head>
        <title>Toyota Models</title>
        </head>

    <body>
        
       <?php include('includes/head.php'); ?>
      <?php include('includes/navigation.php'); ?>
        <?php 
            
        //connect to Database    
         $db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');


        //check if DB is properly connected
        if( $db ) {
  
             echo "connection Established!"; //it is indeed successful.
  
                 } else{
                     
            echo "not connected!";
                     }



       //query - It works!
        $query = "SELECT toyota_id,toyota_image,make,model,price,location FROM toyota";
        
        
         $info = mysqli_query($db, $query);
            
        while($result = mysqli_fetch_assoc($info)){
            //fetch the following rows from the Database:
            
            $toyota_id = $result['toyota_id'];
            $toyota_image = $result['toyota_image'];
            $make = $result['make'];
            $model = $result['model'];
            $price = $result['price'];
            $location = $result['location'];
            
            //now we can easily echo (show them on screen)
            echo "<h4>$model</h4>";
            echo "<p>$location</p>";
            echo "<p>$make</p>";
            echo "<p>$price</p>";
            echo "<img src=\"images/$toyota_image\">";
            echo "<br></br>";

        }    



        ?>
    <?php include('includes/footer.php'); ?>    
    </body>

</html>