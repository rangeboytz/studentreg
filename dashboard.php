<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

<div class="container-box">

<h2>Student Management System</h2>

<hr>

<a href="add_student.php" class="btn btn-success">
Add Student
</a>

<a href="view_students.php" class="btn btn-primary">
View Students
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</div>

</body>
</html>