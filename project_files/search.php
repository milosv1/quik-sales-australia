
<?php 

$db =  mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');

if( $db ){
  
  echo "connection Established!";
  
}
else
{
  echo "not connected!";
}
print_r($_GET);
if(isset($_GET['search'])){
    
    $search = '%'.$_GET['search'].'%';
    echo $search;
    $query = "SELECT  model, price, location, car_image FROM car WHERE model LIKE ? OR make LIKE ?";
    $statement = $db->prepare($query);
    $statement->bind_param('ss',$search, $search);
    $statement->execute();
 ?>
 <!DOCTYPE html>
 <?php include('includes/head.php'); ?>
 <?php include('includes/navigation.php'); ?>;
 <body>
 <?php
    
    $result = $statement->get_result();
    if($result -> num_rows > 0 ){
        while($row = $result -> fetch_assoc() ){
            $model = $row['model'];
            $car_image = $row['car_image'];
            
            echo "<h1>Make: $make</h1>";
            echo "<h1>price: $$price</h1>";
            echo "<h1>Location: $location</h1>";
            echo "<img src=\"images/$car_image\">";
        }
        
    }
    else{
        echo "no result";
    }
    
    
   
    
}








<?php include('includes/footer.php'); ?>
?>
</body>