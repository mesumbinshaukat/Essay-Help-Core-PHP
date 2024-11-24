<?php
session_start();

require_once '../db_config/config.php';


if (isset($_COOKIE["admin_login"])) {
    header("location: ./dashboard/index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `tbl_admin` WHERE `admin_email` = '$email' AND `admin_password` = '$password'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        setcookie("admin_login", "true", time() + 3600, "/");
        setcookie("email", $email, time() + 3600, "/");
        header("location: ./dashboard/index.php");
        exit();
    } else {
        $_SESSION["inavlid_credentials"] = "true";
        header("location: ./login.php");
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    #bg-color {
        background-color: #fb903a;
        border-top-left-radius: 20%;
        border-bottom-right-radius: 20%;
    }
    </style>
</head>

<body>
    <div class="container-sm d-flex justify-content-center align-items-center vh-100">
        <div class="p-3 mt-2 mb-2">
            <img src="../logo/Education Center (2).png" alt="">
        </div>
        <div class="p-5" id="bg-color">
            <form method="POST">

                <div class="row align-items-center justify-content-center">
                    <?php
                    if (isset($_SESSION["inavlid_credentials"]) && $_SESSION["inavlid_credentials"] == "true") {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        INVALID CREDENTIALS
                    </div>
                    <?php unset($_SESSION["inavlid_credentials"]);
                    } ?>
                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div class="w-100">
                            <label for="email" class="form-label text-dark">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                required>

                        </div>
                    </div>

                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div class="w-100">
                            <label for="password" class="form-label text-dark">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password" required>
                        </div>
                    </div>
                    <button type="submit"
                        class="btn btn-dark w-50 text-center d-flex justify-content-center">Login</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>