<?php
include "includes/db.php";

$search = $_POST['search'];
if(!empty($search)){
    $query = "SELECT * FROM products WHERE product_name LIKE '$search%' ";

    $search_products_query = mysqli_query($connection,$query);
    if(!$search_products_query){
        die("Query Failed ".mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($search_products_query)){
        $product_name = $row['product_name'];

     ?>

     <ul class="list-unstyled">

     <?php echo "<li>{$product_name}</li>"; ?>

     </ul>


  <?php  }
}

?>