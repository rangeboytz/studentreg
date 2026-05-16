<?php
include("config/db.php");

$search = "";

if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$sql = "SELECT * FROM students
WHERE fullname LIKE '%$search%'
ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>Students</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

<div class="container-box">

<h3>All Students</h3>

<form method="GET" class="mb-3">

<div class="row">

<div class="col-md-10">
<input type="text"
name="search"
class="form-control"
placeholder="Search student">
</div>

<div class="col-md-2">
<button class="btn btn-primary w-100">
Search
</button>
</div>

</div>

</form>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Photo</th>
<th>Name</th>
<th>Gender</th>
<th>Course</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td>
<img src="uploads/<?= $row['image']; ?>"
width="60">
</td>

<td><?= $row['fullname']; ?></td>

<td><?= $row['gender']; ?></td>

<td><?= $row['course']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['phone']; ?></td>

<td>

<a href="edit_student.php?id=<?= $row['id']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="delete_student.php?id=<?= $row['id']; ?>"
class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>