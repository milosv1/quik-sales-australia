<?php
$db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');
$search = $_GET['search'];
$query = "SELECT car_id ,model, price, location, car_image FROM car WHERE model LIKE ? OR make LIKE ?"; 
$statement = $db -> prepare($query);
$search_param = "%$search%";
$statement -> bind_param('ss', $search_param, $search_param );
$statement -> execute();
$result = $statement -> get_result();
?>
<!doctype html>
<html>
    <?php include('includes/head.php'); ?>
    <?php include('includes/navigation.php'); ?>
    <body>
        <div class="container">
            <div class="row">
               <?php
                if( $result -> num_rows > 0 ){
                    while( $row = $result -> fetch_assoc() ){
                        $id = $row['car_id'];
                        $model = $row['model'];
                        $price = $row['price'];
                        $location = $row['location'];
                        $image = $row['car_image'];
                        echo "<div class=\"col-md-3\">
                        <h3>$model</h3>
                        <img class=\"img-fluid\" src=\"images/$image\">
                        <p>$price</p>
                        <p>$location</p>
                        </div>";
                    }
                }
                else{
                    echo "no result";
                }
                ?> 
            </div>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
    
</html>
