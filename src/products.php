<?php

include "includes/header.php";

?>

    <div class="row no-gutters">
        <div class="col-md-2 bg-inverse">
            <div class="text-center my-5">
                <img class="img-fluid" src="img/green.png" height="100" width="100" alt="Green Mart Logo">
            </div>
            <ul class="nav mt-4 flex-column nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link p-3"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a></li>

                <li class="nav-item"><a href="orders.php" class="nav-link p-3"><i class="fas fa-sync mr-3"></i>Orders</a></li>

                <li class="nav-item"><a href="products.php" class="nav-link active p-3"><i class="fas fa-birthday-cake mr-3"></i>Products</a></li>

                <li class="nav-item"><a href="categories.php" class="nav-link p-3"><i class="fas fa-folder-open mr-3"></i>Categories</a></li>

                <li class="nav-item"><a href="users.php" class="nav-link p-3"><i class="fas fa-users mr-3"></i>Users</a></li>
            </ul>

        </div>
        <div class="col-md-10">
        <?php
        include "includes/navigation.php";
        ?>

            <header id="main-header" class="bg-success py-2 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><i class="fas fa-birthday-cake"></i> Products</h1>

                        </div>
                    </div>
                </div>
            </header>

        
                <!-- ACTIONS -->

        <section id="actions" class="py-4 mb-4 bg-faded">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Products.." id="search-product">
                            <span class="input-group-btn">
                                <button class="btn btn-success">Search</button>
                            </span>
                        </div>
                        <h6 id="search-container" class="mt-3 pl-3"></h6>
                    </div>
                </div>
            </div>
        </section>


                <!-- PRODUCTS -->
    <section id="products" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Products</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Offer Price</th>
                                    <th>Image1</th>
                                    <th>Image2</th>
                                    <th>Image3</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Edit/Delete</th>
                                    <!-- <th>Publish/Draft</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <?php
$query = "SELECT * FROM products";
$select_all_products_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_all_products_query)){
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_category = $row['product_category'];
    $product_price = $row['product_price'];
    $product_offer_price = $row['product_offer_price'];
    $product_image1 = $row['product_image1'];
  
    $product_image2 = $row['product_image2'];

    $product_image3 = $row['product_image3'];

    $product_description = $row['product_description'];
    $product_status = $row['product_status'];

    ?>
                                    <tr>
                                        <td scope="row"><?php echo $product_id; ?></td>
                                        <td><?php echo $product_name; ?></td>
                                        <td><?php echo $product_category; ?></td>
                                        
                                        <td><?php echo $product_price; ?></td>
                                        <td><?php echo $product_offer_price; ?></td>
                                        <td><img src="img/<?php echo $product_image1; ?>" class="img-fluid" height="100px" width="100px" alt=""></td>
                                        <td><img src="img/<?php echo $product_image2; ?>" class="img-fluid" height="100px" width="100px" alt=""></td>
                                        <td><img src="img/<?php echo $product_image3; ?>" class="img-fluid" height="100px" width="100px" alt=""></td>
                                        <td><?php echo $product_description; ?></td>
                                        <td><?php echo $product_status; ?></td>
                                        <td class="pl-5">
                                <a href="#addProductModal" data-toggle="modal" data-product-id="<?php echo $product_id; ?>" data-product-name="<?php echo $product_name; ?>" data-product-category="<?php echo $product_category; ?>" data-product-price="<?php echo $product_price; ?>" data-product-offer-price="<?php echo $product_offer_price; ?>" data-product-image1="<?php echo $product_image1; ?>" data-product-image2="<?php echo $product_image2; ?>" data-product-image3="<?php echo $product_image3; ?>" data-product-description="<?php echo $product_description; ?>" data-product-status="<?php echo $product_status; ?>"><i class="fas fa-pen text-primary mr-1"></i></a>
                                <a href="products.php?delete=<?php echo $product_id; ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                </td>
                                    
                                        
                                    </tr>
                                    <?php } ?>
                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>            
                
    <?php
                          if(isset($_GET['delete'])){
                            $the_product_id = $_GET['delete'];
                          $query = "DELETE FROM products WHERE product_id = {$the_product_id} ";
                          $delete_query = mysqli_query($connection,$query);
                          if(!$delete_query){
                              die("Query Failed ".mysqli_error($connection));
                          }
                          
                          header("Location: products.php");
                          
                          }

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
                          

                        ?>

                        <?php include "add_product_modal.php";?> 

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('product_description');
    </script>
    <script>
    $(document).ready(function(){
      $("#search-product").keyup(function(){
          var search = $("#search-product").val();

          $.ajax({
            url:"search_products.php",
            data:{search:search},
            type:"POST",
            success:function(data){

                if(!data.error){
                    $("#search-container").html(data);
                }
            }  
          });



      })  
    
    })
    </script>

    <script>
    $('#addProductModal').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var productId = $(e.relatedTarget).data('product-id');
var productName = $(e.relatedTarget).data('product-name');
var productCategory = $(e.relatedTarget).data('product-category');
var productPrice = $(e.relatedTarget).data('product-price');
var productOfferPrice = $(e.relatedTarget).data('product-offer-price');
var productImage1 = $(e.relatedTarget).data('product-image1');
var productImage2 = $(e.relatedTarget).data('product-image2');
var productImage3 = $(e.relatedTarget).data('product-image3');
var productDescription = $(e.relatedTarget).data('product-description');
var productStatus = $(e.relatedTarget).data('product-status');


$("#image-input1").removeAttr('required');
//populate the textbox
// alert( CKEDITOR.instances.product_description);
$(e.currentTarget).find('input[name="product_name"]').val(productName);
$("#product_category").val(productCategory);
$("#product_status").val(productStatus);
$(e.currentTarget).find('input[name="product_price"]').val(productPrice);
$(e.currentTarget).find('input[name="product_offer_price"]').val(productOfferPrice);
// product_description is the id
CKEDITOR.instances.product_description.setData(productDescription);


$("#add_product_button").html('Save Changes');
$('#productForm').append("<input type='hidden' name='product_id' value='"+productId+"'>");
$("#product-image1-thumbnail").attr("src","img/"+productImage1);
$("#product-image2-thumbnail").attr("src","img/"+productImage2);
$("#product-image3-thumbnail").attr("src","img/"+productImage3);
});


function readURL(input,image) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+image).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#image-input1").change(function(){
    readURL(this,"product-image1-thumbnail");
});
$("#image-input2").change(function(){
    readURL(this,"product-image2-thumbnail");
});
$("#image-input3").change(function(){
    readURL(this,"product-image3-thumbnail");
});
   
</script>

</body>

</html>