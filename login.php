<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KLNConnect - Login</title>
    <link rel="stylesheet" href="./assets/vendors/core/core.css">
    <link rel="stylesheet" href="./assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>
<?php
require('./core/db-config.php');
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];
        if (password_verify($password, $hashed_password)) {
            $_SESSION["loggedin"] = true;
            $_SESSION["UserID"] = $row['id'];
            $_SESSION["fName"] = $row['fname'];
            $_SESSION["lName"] = $row['lname'];
            $_SESSION["email"] = $row['email'];
            header("location: index.php");
        } else {
            $error = '<div class="alert alert-danger" role="alert">Invalid email address or password</div>';
        }
    } else {
        $error = '<div class="alert alert-danger" role="alert">Invalid email address or password</div>';
    }
    mysqli_close($conn);
}
?>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">KLN <span>Connect</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                                        <?php
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?>
                                        <form class="forms-sample" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mt-3">
                                                        <button type="submit" name="submit" class="btn btn-block btn-primary mr-2 mb-2 mb-md-0 text-white">Login My Account</button>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-3">
                                                        <a type="submit" name="submit" class="btn btn-block btn-primary mr-2 mb-2 mb-md-0 text-white" href="./register.php">Registrations</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="./assets/vendors/core/core.js"></script>
    <script src="./assets/vendors/feather-icons/feather.min.js"></script>
    <script src="./assets/js/template.js"></script>
</body>

</html>