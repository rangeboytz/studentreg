<?php
include("config/db.php");

if(isset($_POST['save'])){

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp_name,"uploads/$image");

    $sql = "INSERT INTO students(fullname,gender,course,email,phone,image)

    VALUES('$fullname','$gender','$course','$email','$phone','$image')";

    mysqli_query($conn,$sql);

    header("Location:view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

<div class="container-box">

<h3>Add Student</h3>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label>Full Name</label>
<input type="text" name="fullname" class="form-control">
</div>

<div class="mb-3">
<label>Gender</label>

<select name="gender" class="form-control">
<option>Male</option>
<option>Female</option>
</select>

</div>

<div class="mb-3">
<label>Course</label>
<input type="text" name="course" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Photo</label>
<input type="file" name="image" class="form-control">
</div>

<button name="save" class="btn btn-success">
Save Student
</button>

</form>

</div>

</div>

</body>
</html>