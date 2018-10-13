<?php

include "includes/header.php";


?>
    <div class="row no-gutters" style="min-height:100vh">
        <div class="col-md-2 bg-inverse">
            <div class="text-center my-5">
                <img class="img-fluid" src="img/green.png" height="100" width="100" alt="Green Mart Logo">
            </div>
            <ul class="nav mt-4 flex-column nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active p-3"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a></li>

                <li class="nav-item"><a href="orders.php" class="nav-link p-3"><i class="fas fa-sync mr-3"></i>Orders</a></li>

                <li class="nav-item"><a href="products.php" class="nav-link p-3"><i class="fas fa-birthday-cake mr-3"></i>Products</a></li>

                <li class="nav-item"><a href="categories.php" class="nav-link p-3"><i class="fas fa-folder-open mr-3"></i>Categories</a></li>

                <li class="nav-item"><a href="users.php" class="nav-link p-3"><i class="fas fa-users mr-3"></i>Users</a></li>
            </ul>

        </div>
        <div class="col-md-10">
            <?php
            include "includes/navigation.php";


            ?>

            <header id="main-header" class="bg-primary py-2 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><i class="fas fa-binoculars"></i> Overview</h1>

                        </div>
                    </div>
                </div>
            </header>

            <!-- ACTIONS  -->
            <div class="bg-faded-1">
                <section id="actions" class="pt-5">
                    <div class="container">
                        <div class="row">


                            <div class="col-md-4">
                                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#addProductModal"
                                    type="button"><i class="fas fa-plus"></i> Add Product</button>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#addCategoryModal"
                                    type="button"><i class="fas fa-plus"></i> Add Category</button>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#addUserModal"
                                    type="button"><i class="fas fa-plus"></i> Add User</button>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- OVERVIEW -->
                <section id="overview" class="mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-center card-inverse card-danger">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-truck fa-lg"></i></h4>
                                            <h1 class="card-subtitle display-4">1547</h2>
                                                <p class="card-text ml-2">Orders Pending</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center card-inverse card-info">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-handshake fa-lg"></i></h4>
                                            <h1 class="card-subtitle display-4">15400</h2>
                                                <p class="card-text ml-2">Items Sold</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center card-inverse card-dark">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-calendar-alt fa-lg"></i></h4>
                                            <h1 class="card-subtitle display-4">7430</h2>
                                                <p class="card-text ml-2">This Week</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="card text-center card-inverse card-primary">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-signal fa-lg"></i></h4>
                                            <h1 class="card-subtitle display-4">1750</h2>
                                                <p class="card-text ml-2">All Products</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center card-inverse card-success">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-heartbeat fa-lg"></i></i></h4>
                                            <h1 class="card-subtitle display-4">1500</h2>
                                                <p class="card-text ml-2">Live Products</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-inverse text-center card-warning">
                                    <div class="card-block">
                                        <h1 class="card-title"><i class="fas fa-question-circle fa-lg"></i></h4>
                                            <h1 class="card-subtitle display-4">250</h2>
                                                <p class="card-text ml-2">Out Of Stock</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </section>

                <!-- LATEST ORDERS -->
    <section id="latestOrders" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Latest Orders</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Order Id</th>
                                    <th>Customer Name</th>
                                    <th>Mobile</th>
                                    <th>Date</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>11544</td>
                                        <td>Saheer</td>
                                        <td>9895301704</td>
                                        <td>27-09-2018</td>
                                        <td>Ayyappankavu,Parappanangadi</td>
                                        <td>Pending</td>
                                        <td><a href="details.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i> details</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>11577</td>
                                        <td>Muneer</td>
                                        <td>8129736263</td>
                                        <td>27-09-2018</td>
                                        <td>Ayyappankavu,Parappanangadi</td>
                                        <td>Pending</td>
                                        <td><a href="details.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i> details</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>27156</td>
                                        <td>Sabik</td>
                                        <td>9567380398</td>
                                        <td>26-09-2018</td>
                                        <td>Ayyappankavu,Parappanangadi</td>
                                        <td>Pending</td>
                                        <td><a href="details.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i> details</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>32547</td>
                                        <td>Anees</td>
                                        <td>9037379941</td>
                                        <td>25-09-2018</td>
                                        <td>Ayyappankavu,Parappanangadi</td>
                                        <td>Pending</td>
                                        <td><a href="details.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i> details</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>16338</td>
                                        <td>Shibin</td>
                                        <td>8157051752</td>
                                        <td>25-09-2018</td>
                                        <td>Ayyappankavu,Parappanangadi</td>
                                        <td>Pending</td>
                                        <td><a href="details.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i> details</a></td>
                                    </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>            


                

    <!-- ADD PRODUCT MODAL -->

    <?php include "includes/add_product_modal.php"; ?>

    <?php addProduct(); ?>

    <!-- ADD CATEGORY MODAL LABEL -->
    
    <?php include "includes/add_category_modal.php"; ?>

    <?php addCategory(); ?>

    <!-- ADD USER MODAL -->
    <?php include "includes/add_user_modal.php"; ?>
    
    <?php addUser(); ?>

    

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('product_description');
    </script>
    <script>
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



$("#image-input").change(function(){
    readURL(this,"cat-image-thumbnail");
});

function passwordCheck() {
    var pass1 = document.getElementById("admin_password").value;
    var pass2 = document.getElementById("retype_password").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("admin_password").style.borderColor = "#E34234";
        document.getElementById("retype_password").style.borderColor = "#E34234";
        ok = false;
        $('#password_message').html('Not Matching').css('color', '#E34234');
    }

    return ok;
}


    </script>

</body>

</html>