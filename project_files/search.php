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
    $query = "SELECT  model, price, location FROM car WHERE model LIKE ? OR make LIKE ?";
    $statement = $db->prepare($query);
    $statement->bind_param('s',$search);
    $statement->execute();
    
    $result = $statement->get_result();
    if($result -> num_rows > 0 ){
        while($rows = $result -> fetch_assoc() ){
            $model = $row['model'];
            
            
            echo "<h1>Make: $make</h1>"
            echo "<h1>price: $$price</h1>"
            echo "<h1>Location: $location</h1>"
        }
        
    }
    else{
        echo "no result";
    }
    
    
   
    
}









?>