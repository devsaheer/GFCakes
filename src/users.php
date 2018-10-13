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

            <li class="nav-item"><a href="categories.php" class="nav-link p-3"><i class="fas fa-folder-open mr-3"></i>Categories</a></li>

            <li class="nav-item"><a href="users.php" class="nav-link active p-3"><i class="fas fa-users mr-3"></i>Users</a></li>
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
                        <h1><i class="fas fa-users"></i> Users</h1>

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
                            <input type="text" class="form-control" placeholder="Search Users..">
                            <span class="input-group-btn">
                                <button class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- USERS -->
        <section id="users" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Users</h4>
                            </div>
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Update/Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query = "SELECT * FROM admins";
                                $select_admins_query = mysqli_query($connection,$query);
                                if(!$select_admins_query){
                                    die("Query Failed ".mysqli_error($connection));
                                }
                                while($row = mysqli_fetch_assoc($select_admins_query)){
                                    $admin_id = $row['admin_id'];
                                    $admin_name = $row['admin_name'];
                                    ?>
                                    <tr>
                                        <td scope='row'>
                                            <?php echo $admin_id;  ?>
                                        </td>
                                        <td>
                                            <?php echo $admin_name;  ?>
                                        </td>
                                        <td class="pl-5"><a href="#addUserModal" data-toggle="modal" data-admin-id="<?php echo $admin_id; ?>"
                                                data-admin-name="<?php echo $admin_name; ?>"><i class="fas fa-pen text-primary mr-1"></i></a>
                                            <a href="users.php?delete=<?php echo $admin_id; ?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
                                    </tr>
                                    <?php  }

                                ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php deleteUser(); ?>                            
        <?php updateUser(); ?>                            
 
        <?php include "includes/add_user_modal.php"; ?>

        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <script>

    $('#addUserModal').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var adminId = $(e.relatedTarget).data('admin-id');
var adminName = $(e.relatedTarget).data('admin-name');

//populate the textbox
$(e.currentTarget).find('input[name="admin_name"]').val(adminName);
$("#add_user_button").html('Save Changes');
$('#userForm').append("<input type='hidden' name='admin_id' value='"+adminId+"'>");
// $('#categoryForm').append("<div class='form-group'><img width='100' src='img/'"+catImage+"'></div>");
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