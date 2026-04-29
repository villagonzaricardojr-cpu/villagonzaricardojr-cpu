<?php include '../config/db.php'; ?>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, course, year, email)
            VALUES ('$name','$course','$year','$email')";
    $conn->exec($sql);

   echo "Student Added!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="card">


<div class="content-box">

<div class="top-bar">
   <h3>Add Student</h3>
   <span class="admin">Admin</span>
</div>

<div class="form-grid">
   <input type="text" name="name" placeholder="Enter name" required>
   <input type="text" name="course" placeholder="Enter course">
   <input type="text" name="year" placeholder="Enter year">
   <input type="email" name="email" placeholder="Enter email">
</div>

<button class="btn" name="save">Save Student</button>

  <a href="../index.php">Dashboard</a>
<a href="add.php">Add Student</a>
<a href="search.php">Search Student</a>
<a href="update.php">Update Student</a>
<a href="delete.php">Delete Student</a>
<a href="students.php">All Students</a>
            
</div>