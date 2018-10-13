<?php
include "includes/db.php";
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bootstrap 4 Starter</title>
    <style type="text/css">

    </style>
</head>

<body>
        <!-- LOGIN FORM  -->


        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mt-5 pt-5">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="text-center">Login</h3>
                            </div>
                            <div class="card-block">

                                <form method="post">
                                    <div class="form-group">
                                        <label for="admin_name" class="form-control-label">Username</label>
                                        <input type="text" class="form-control" name="admin_name" id="admin_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="admin_password" class="form-control-label">Password</label>
                                        <input type="password" class="form-control" name="admin_password" id="admin_password"
                                            required>
                                    </div>
                                    <div class="form-group">

                                        <input type="submit" class="form-control btn btn-primary" name="admin_login"
                                            value="Login">
                                    </div>

                                </form>





                                <?php
        if(isset($_POST['admin_login'])){
            $admin_name = $_POST['admin_name'];
            $admin_password = $_POST['admin_password'];

            $admin_name = mysqli_real_escape_string($connection,$admin_name);
            $admin_password = mysqli_real_escape_string($connection,$admin_password);
            $query = "SELECT * FROM admins WHERE admin_name = '{$admin_name}' ";
            $select_admin_query = mysqli_query($connection,$query);
            if(!$select_admin_query){
                die("query failed ".mysqli_error($connection));

            }

            if(mysqli_num_rows($select_admin_query) === 0){
            ?>
                                <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <strong>Oops..</strong>user doesnt exist!</div>
                                <?php
            }else{

            while($row = mysqli_fetch_assoc($select_admin_query)){
                $db_admin_id = $row['admin_id']; 
                $db_admin_name = $row['admin_name'];
                $db_admin_password = $row['admin_password'];
               
               
            }

            if($db_admin_password !== $admin_password){
            ?>
                                <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <strong>Incorrect Password!</strong> Please Check Your Password
                                </div>

                        <?php   }
                                else
                                {
                                 $_SESSION['admin_name'] = $db_admin_name;   
                                 header("Location: index.php");
                                }



        }

    }
        ?>


                            </div>
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