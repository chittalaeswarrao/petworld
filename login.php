<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Log in</title>

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="styles.css">
    
</head>


<body class="hold-transition login-page">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <!-- <a href="./index.php "><b class="bg-info">PET WORLD</b></a> -->
                <p class="login-box-msg text-dark"style="text-align:center">PET WORLD</p>

                <form action="./include/login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name='username' class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name='password' class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-body btn-info text-dark">Sign In</button>
                            <?php
                            if (isset($_SESSION['error'])) {
                                echo $_SESSION['error'];
                                $_SESSION['error'] = "";
                            }
                            ?>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>
    </html>
