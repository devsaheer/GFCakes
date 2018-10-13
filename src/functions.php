<?php

function deleteUser(){
    global $connection;    
    if(isset($_GET['delete'])){
        $the_admin_id = $_GET['delete'];
      $query = "DELETE FROM admins WHERE admin_id = {$the_admin_id} ";
      $delete_query = mysqli_query($connection,$query);
      if(!$delete_query){
          die("Query Failed ".mysqli_error($connection));
      }
      
      header("Location:users.php");
      
      }
}

function updateUser(){
    global $connection; 
    
    if(isset($_POST['add_user'])){
        $the_admin_id = $_POST['admin_id'];
        $the_admin_name = $_POST['admin_name'];
        $the_admin_password = $_POST['admin_password'];
        $retype_password = $_POST['retype_password'];
        $query = "UPDATE admins SET admin_name = '{$the_admin_name}',admin_password = '{$the_admin_password}' WHERE admin_id = {$the_admin_id} ";
        $update_user_query = mysqli_query($connection,$query);
        if(!$update_user_query){
            die("Query Failed ".mysqli_error($connection));
        }
        
      
      
      header("Location:users.php");

    }
}

function deleteProduct(){
    global $connection; 
    
    if(isset($_GET['delete'])){
        $the_product_id = $_GET['delete'];
      $query = "DELETE FROM products WHERE product_id = {$the_product_id} ";
      $delete_query = mysqli_query($connection,$query);
      if(!$delete_query){
          die("Query Failed ".mysqli_error($connection));
      }
      
      header("Location: products.php");
      
      }
}


function updateProduct(){
    global $connection; 
    if(isset($_POST['add_product'])){
        $the_product_id = $_POST['product_id'];
        $the_product_name = $_POST['product_name'];
        $the_product_category = $_POST['product_category'];
        $the_product_price = $_POST['product_price'];
        $the_product_offer_price = $_POST['product_offer_price'];
        $the_product_image1 = $_FILES['product_image1']['name'];
        $the_product_image1_tmp = $_FILES['product_image1']['tmp_name'];
        $the_product_image2 = $_FILES['product_image2']['name'];
        $the_product_image2_tmp = $_FILES['product_image2']['tmp_name'];
        $the_product_image3 = $_FILES['product_image3']['name'];
        $the_product_image3_tmp = $_FILES['product_image3']['tmp_name'];
        $the_product_description = $_POST['product_description'];
        $the_product_status = $_POST['product_status'];

        move_uploaded_file($the_product_image1_tmp,"img/$the_product_image1");
        move_uploaded_file($the_product_image2_tmp,"img/$the_product_image2");
        move_uploaded_file($the_product_image3_tmp,"img/$the_product_image3");

      $query = "SELECT * FROM products WHERE product_id = {$the_product_id} ";
      $select_image_query = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_image_query)){
        $image1 = $row['product_image1'];
        $image2 = $row['product_image2'];
        $image3 = $row['product_image3'];
      }

      if(empty($the_product_image1)){
          
            $the_product_image1 = $image1;
          
      }

      
      if(empty($the_product_image2)){
        
          $the_product_image2 = $image2;
        

    }

    
    if(empty($the_product_image3)){ 
        
          $the_product_image3 = $image3;
        

    }


      $query = "UPDATE products SET product_name = '{$the_product_name}',product_category = '{$the_product_category}',product_price = '{$the_product_price}',product_offer_price = '{$the_product_offer_price}',product_image1 = '{$the_product_image1}',product_image2 = '{$the_product_image2}',product_image3 = '{$the_product_image3}',product_description = '{$the_product_description}',product_status = '{$the_product_status}' WHERE product_id = {$the_product_id}";
      $update_products_query = mysqli_query($connection,$query);
      if(!$update_products_query){
          die("query failed ".mysqli_error($connection));
      }
      
      header("Location: products.php");

    }
}

function deleteCategory(){
    global $connection; 
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
      $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
      $delete_query = mysqli_query($connection,$query);
      if(!$delete_query){
          die("Query Failed ".mysqli_error($connection));
      }
      
      header("Location: categories.php");
      
      }
}


function updateCategory(){
    global $connection; 
    if(isset($_POST['add_category'])){
        $the_cat_id = $_POST['cat_id'];
        $the_cat_name = $_POST['cat_name'];
        $the_cat_image = $_FILES['cat_image']['name'];
        $the_cat_image_tmp = $_FILES['cat_image']['tmp_name'];
        move_uploaded_file($the_cat_image_tmp,"img/$the_cat_image");
        if(empty($the_cat_image)){
        $query = "SELECT * FROM categories WHERE cat_id = {$the_cat_id}";
        $select_image_query = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_image_query)){
            $the_cat_image = $row['cat_image'];
        }
        }
      $query = "UPDATE categories SET cat_name = '{$the_cat_name}',cat_image = '{$the_cat_image}' WHERE cat_id = {$the_cat_id}";
      $update_categories_query = mysqli_query($connection,$query);
      if(!$update_categories_query){
          die("query failed ".mysqli_error($connection));
      }
      
      header("Location: categories.php");

    }
      

}

function addUser(){
    global $connection; 
    if(isset($_POST['add_user'])){
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];
        $retype_password = $_POST['retype_password'];
        $query = " INSERT INTO admins(admin_name,admin_password) VALUES('{$admin_name}','{$admin_password}') ";
        $add_user_query = mysqli_query($connection,$query);
        if(!$add_user_query){
            die("Query Failed ".mysqli_error($connection));
        }
    }    
}

function addCategory(){
    global $connection; 
    if(isset($_POST['add_category'])){

        $cat_name = $_POST['cat_name'];
        $cat_image = $_FILES['cat_image']['name'];
        $cat_image_tmp = $_FILES['cat_image']['tmp_name'];
        move_uploaded_file($cat_image_tmp,"img/$cat_image");
        $query = "INSERT INTO categories(cat_name, cat_image) VALUES ('{$cat_name}', '{$cat_image}')";
        $add_category_query = mysqli_query($connection,$query);
        if(!$add_category_query){

            die("query failed".mysqli_connect_errno());
        }
        
    }
}

function addProduct(){
    global $connection; 
    if(isset($_POST['add_product'])){
        $product_name = $_POST['product_name'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];
        $product_offer_price = $_POST['product_offer_price'];
        $product_image1 = $_FILES['product_image1']['name'];
        $product_image1_tmp = $_FILES['product_image1']['tmp_name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image2_tmp = $_FILES['product_image2']['tmp_name'];
        $product_image3 = $_FILES['product_image3']['name'];
        $product_image3_tmp = $_FILES['product_image3']['tmp_name'];
        $product_description = $_POST['product_description'];
        $product_status = $_POST['product_status'];

        move_uploaded_file($product_image1_tmp,"img/$product_image1");
        move_uploaded_file($product_image2_tmp,"img/$product_image2");
        move_uploaded_file($product_image3_tmp,"img/$product_image3");

        $query = "INSERT INTO products(product_name,product_category,product_price,product_offer_price,product_image1,product_image2,product_image3,product_description,product_status)";
        $query.= "VALUES('{$product_name}','{$product_category}',{$product_price},{$product_offer_price},'{$product_image1}','{$product_image2}','{$product_image3}','{$product_description}','{$product_status}')";

        $add_product_query = mysqli_query($connection,$query);

        if(!$add_product_query){
            die("Query Failed ".mysqli_error($connection));
        }
        
    }

}

?>