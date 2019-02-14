<?php
$db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');
$search = $_GET['search'];
$query = "SELECT car_id ,model, price, location, car_image FROM car WHERE model LIKE ? OR make LIKE ?"; 
$statement = $db -> prepare($query);
$search_param = "%$search%";
$statement -> bind_param('ss', $search_param, $search_param );
$statement -> execute();
$result = $statement -> get_result();
if( $result -> num_rows > 0 ){
    while( $row = $result -> fetch_assoc() ){
        print_r($row);
    }
}
else{
    echo "no result";
}
?>