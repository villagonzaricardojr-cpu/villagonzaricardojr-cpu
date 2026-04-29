<?php include '../config/db.php'; ?>

<?php
$students = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

<?php include 'sidebar.php'; ?>

<div class="main">

<h2>5. Display All Students</h2>
<p class="subtitle">Show complete list of records.</p>

<div class="card">

   

    <!-- CONTENT -->
    <div class="content-box">

        <!-- TOP BAR -->
        <div class="top-bar">
            <h3>All Students</h3>
            <a href="add.php" class="btn">Add Student</a>
        </div>

        <!-- TABLE -->
        <div class="card">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Email</th>
                </tr>

                <?php foreach ($students as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php endforeach; ?>

            </table>

          <a href="../index.php">Dashboard</a>
<a href="add.php">Add Student</a>
<a href="search.php">Search Student</a>
<a href="update.php">Update Student</a>
<a href="delete.php">Delete Student</a>
<a href="students.php">All Students</a>
        </div>

    </div>

</div>

</div>

</div>

</body>
</html>