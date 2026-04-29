<?php include '../config/db.php'; ?>

<?php
$data = null;

// STEP 1: FIND STUDENT
if (isset($_POST['find'])) {
    $id = $_POST['id'];
    $data = $conn->query("SELECT * FROM students WHERE id='$id'")->fetch();
}

// STEP 2: UPDATE STUDENT
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];

    $conn->exec("UPDATE students SET 
        name='$name',
        course='$course',
        year='$year',
        email='$email'
        WHERE id='$id'
    ");

    echo "<script>alert('Student Updated Successfully');</script>";
}
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

<h2>3. Update Student Information</h2>
<p class="subtitle">Edit existing data if needed.</p>

<div class="card">



    <!-- CONTENT -->
    <div class="content-box">

        <div class="top-bar">
            <h3>Update Student</h3>
            <span class="admin">Admin</span>
        </div>

        <!-- FIND FORM -->
        <form method="POST">
            <input type="text" name="id" placeholder="Enter Student ID" required>
            <button class="btn" name="find">Search</button>
        </form>

        <!-- UPDATE FORM -->
        <?php if ($data): ?>
        <form method="POST" style="margin-top:15px;">
            
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="form-grid">
                <input type="text" name="name" value="<?php echo $data['name']; ?>" required>
                <input type="text" name="course" value="<?php echo $data['course']; ?>">
                <input type="text" name="year" value="<?php echo $data['year']; ?>">
                <input type="email" name="email" value="<?php echo $data['email']; ?>">
            </div>

            <button class="btn" name="update">Update Student</button>
        </form>
        <?php endif; ?>
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

</body>
</html>