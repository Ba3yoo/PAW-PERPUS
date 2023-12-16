<?php

require_once('Model/Database.php');

session_start();

$error = '';
$validate = '';
if (isset($_SESSION['user'])) header('Location: dashboard.php');

if (isset($_POST['submit'])) {
    $db = new Database();
    $mysqli = $db->getConnection();
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($mysqli, $username);
    $name     = stripslashes($_POST['name']);
    $name     = mysqli_real_escape_string($mysqli, $name);
    $email    = stripslashes($_POST['email']);
    $email    = mysqli_real_escape_string($mysqli, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($mysqli, $password);
    $pass  = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO akun (username,name,email, password ) VALUES ('$username','$name','$email','$pass')";
    $result   = mysqli_query($mysqli, $query);
    if ($result) {
        $error =  'Registrasi Berhasil !!';
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
    }
}

function cek_nama($username, $mysqli)
{
    $nama = mysqli_real_escape_string($mysqli, $username);
    $query = "SELECT * FROM akun WHERE username = '$nama'";
    if ($result = mysqli_query($mysqli, $query)) return mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perpustakaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/apple-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="icon" href="/assets/images/icon.png" type="image/x-icon">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--
    

-->
</head>

<body>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <form class="form-container" action="register.php" method="POST">
                                <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                                <?php if ($error != '') { ?>
                                    <div class="alert alert-succes" role="alert"><?= $error; ?></div>
                                <?php } ?>

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Alamat Email</label>
                                    <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-block">Register</button>
                                <div class="form-footer mt-2">
                                    <p> Sudah punya account? <a href="login.php">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>