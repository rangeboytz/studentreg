<?php
include("config/db.php");

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM students WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn,"
    UPDATE students SET

    fullname='$fullname',
    gender='$gender',
    course='$course',
    email='$email',
    phone='$phone'

    WHERE id='$id'
    ");

    header("Location:view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">

<div class="mt-5">

<h3>Edit Student</h3>

<form method="POST">

<div class="mb-3">
<input type="text"
name="fullname"
class="form-control"
value="<?= $row['fullname']; ?>">
</div>

<div class="mb-3">
<input type="text"
name="gender"
class="form-control"
value="<?= $row['gender']; ?>">
</div>

<div class="mb-3">
<input type="text"
name="course"
class="form-control"
value="<?= $row['course']; ?>">
</div>

<div class="mb-3">
<input type="email"
name="email"
class="form-control"
value="<?= $row['email']; ?>">
</div>

<div class="mb-3">
<input type="text"
name="phone"
class="form-control"
value="<?= $row['phone']; ?>">
</div>

<button name="update"
class="btn btn-primary">
Update
</button>

</form>

</div>

</div>

</body>
</html>