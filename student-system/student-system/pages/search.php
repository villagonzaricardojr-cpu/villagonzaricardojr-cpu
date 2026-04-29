<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="card">
   <h2>Student Records</h2>
   <ul>
       <li class="<?= $current == 'index.php' ? 'active' : '' ?>">
           <a href="../index.php">Dashboard</a>
       </li>

       <li class="<?= $current == 'add.php' ? 'active' : '' ?>">
           <a href="add.php">Add Student</a>
       </li>

       <li class="<?= $current == 'search.php' ? 'active' : '' ?>">
           <a href="search.php">Search Student</a>
       </li>

       <li class="<?= $current == 'update.php' ? 'active' : '' ?>">
           <a href="update.php">Update Student</a>
       </li>

       <li class="<?= $current == 'delete.php' ? 'active' : '' ?>">
           <a href="delete.php">Delete Student</a>
       </li>

       <li class="<?= $current == 'students.php' ? 'active' : '' ?>">
           <a href="students.php">All Students</a>
       </li>
   </ul>
   <a href="../index.php">Dashboard</a>
<a href="add.php">Add Student</a>
<a href="search.php">Search Student</a>
<a href="update.php">Update Student</a>
<a href="delete.php">Delete Student</a>
<a href="students.php">All Students</a>
</div>