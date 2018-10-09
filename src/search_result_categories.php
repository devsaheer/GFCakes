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

                <li class="nav-item"><a href="orders.php" class="nav-link p-3"><i class="fas fa-sync mr-3"></i>Orders</a></li>

                <li class="nav-item"><a href="products.php" class="nav-link p-3"><i class="fas fa-birthday-cake mr-3"></i>Products</a></li>

                <li class="nav-item"><a href="categories.php" class="nav-link active p-3"><i class="fas fa-folder-open mr-3"></i>Categories</a></li>

                <li class="nav-item"><a href="users.php" class="nav-link p-3"><i class="fas fa-users mr-3"></i>Users</a></li>
            </ul>

        </div>
        <div class="col-md-10">
        <?php
        include "includes/navigation.php";
        ?>

            <header id="main-header" class="bg-warning py-2 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><i class="fas fa-folder-open"></i> Categories</h1>

                        </div>
                    </div>
                </div>
            </header>

        
                <!-- ACTIONS -->

        <section id="actions" class="py-4 mb-4 bg-faded">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                    <form method="post" action="search_result_categories.php">
                        <div class="input-group">
                            <input type="text" name="search_category" class="form-control" placeholder="Search Categories..">
                            <span class="input-group-btn">
                                <button name="submit" type="submit" class="btn btn-success">Search</button>
                            </span>
                        </div>
                    </form>    
                    </div>
                </div>
            </div>
        </section>

        
                <!-- ORDERS -->
    <section id="orders" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Categories</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Update/Delete</th>
                                </tr>
                            </thead>

<?php

if(isset($_POST['submit'])){

$search_category = $_POST['search_category'];
$query = "SELECT * FROM categories WHERE cat_name LIKE '$search_category%' ";
$search_category_query = mysqli_query($connection,$query);

if(!$search_category_query){
    die("query failed ".mysqli_error($connection));
}

$count = mysqli_num_rows($search_category_query);
if($count == 0){
    echo "<h3 class='text-center'>No Such Category</h3>";
}
else{
  while($row = mysqli_fetch_assoc($search_category_query)){
    $cat_id = $row['cat_id'];
    $cat_name = $row['cat_name'];
    $cat_image = $row['cat_image'];

?>

                            <tbody>
                            
                                <tr>
                                <td scope="row"><?php echo $cat_id; ?></td>
                                <td><?php echo $cat_name; ?></td>
                                <td><img src="img/<?php echo $cat_image; ?>" class="img-fluid" height="100px" width="100px" alt=""></td>
                                <td class="pl-5">
                                <a href="categories.php?update=<?php echo $cat_id; ?>"><i class="fas fa-pen text-primary mr-1"></i></a>
                                <a href="add_category_modal.php?delete=<?php echo $cat_id; ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                </td>
                                              
                                     </tr>
                                    <?php }


                                    }
                                    }
                                    ?>             
                                     </tbody>
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