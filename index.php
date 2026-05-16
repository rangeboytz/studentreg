<?php
session_start();

if(isset($_SESSION['admin'])){
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <form method="POST" action="process_login.php">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="container-box">

                <h3 class="text-center mb-4">Admin Login</h3>

                <form action="process_login.php" method="POST">

                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button class="btn btn-primary w-100">
                        Login
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

</body>
</html>