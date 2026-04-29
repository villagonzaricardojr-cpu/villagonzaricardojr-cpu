<?php include '../config/db.php'; ?>

<?php
$data = null;

// STEP 1: FIND STUDENT
if (isset($_POST['find'])) {
    $id = $_POST['id'];
    $data = $conn->query("SELECT * FROM students WHERE id='$id'")->fetch();
}

// STEP 2: DELETE STUDENT
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn->exec("DELETE FROM students WHERE id='$id'");
    echo "<script>alert('Student Deleted Successfully');</script>";
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

<h2>4. Delete Student Records</h2>
<p class="subtitle">Remove unnecessary or incorrect data.</p>

<div class="card">
    

    <!-- CONTENT -->
    <div class="content-box">

        <div class="top-bar">
            <h3>Delete Student</h3>
            <span class="admin">Admin</span>
        </div>

        <!-- SEARCH FORM -->
        <form method="POST">
            <input type="text" name="id" placeholder="Enter student ID" required>
            <button class="btn" name="find">Search</button>
        </form>

        <!-- RESULT -->
        <?php if ($data): ?>
        <div class="card" style="margin-top:15px;">
            <p><strong>ID:</strong> <?php echo $data['id']; ?></p>
            <p><strong>Name:</strong> <?php echo $data['name']; ?></p>
            <p><strong>Course:</strong> <?php echo $data['course']; ?></p>
            <p><strong>Year:</strong> <?php echo $data['year']; ?></p>
            <p><strong>Email:</strong> <?php echo $data['email']; ?></p>

            <!-- DELETE BUTTON -->
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <button class="delete-btn" name="delete">Delete Student</button>
            </form>
        </div>
        <?php endif; ?>

    </div>
<a href="../index.php">Dashboard</a>
<a href="add.php">Add Student</a>
<a href="search.php">Search Student</a>
<a href="update.php">Update Student</a>
<a href="delete.php">Delete Student</a>
<a href="students.php">All Students</a>
</div>

</div>

</div>

</body>
</html>