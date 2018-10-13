<?php

include "includes/header.php";

?>

    <div class="row no-gutters" style="min-height:100vh">
        <div class="col-md-2 bg-inverse">
            <div class="text-center my-5">
                <img class="img-fluid" src="img/green.png" height="100" width="100" alt="Green Mart Logo">
            </div>
            <ul class="nav mt-4 flex-column nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link p-3"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a></li>

                <li class="nav-item"><a href="orders.php" class="nav-link active p-3"><i class="fas fa-sync mr-3"></i>Orders</a></li>

                <li class="nav-item"><a href="products.php" class="nav-link p-3"><i class="fas fa-birthday-cake mr-3"></i>Products</a></li>

                <li class="nav-item"><a href="categories.php" class="nav-link p-3"><i class="fas fa-folder-open mr-3"></i>Categories</a></li>

                <li class="nav-item"><a href="users.php" class="nav-link p-3"><i class="fas fa-users mr-3"></i>Users</a></li>
            </ul>

        </div>
        <div class="col-md-10">
        <?php
        include "includes/navigation.php";
        ?>

            <header id="main-header" class="bg-danger py-2 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><i class="fas fa-sync"></i> Orders</h1>

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
                            <input type="text" class="form-control" placeholder="Search Orders..">
                            <span class="input-group-btn">
                                <button class="btn btn-danger">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



                <!-- ORDERS -->
    <section id="orders" class="mt-5">
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
                


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>