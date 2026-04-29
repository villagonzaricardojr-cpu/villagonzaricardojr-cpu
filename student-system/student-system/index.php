<?php
include 'config/db.php';


// count students
$result = $conn->query("SELECT COUNT(*) as total FROM students");
$data = $result->fetch();
$totalStudents = $data['total'];
?>


<!DOCTYPE html>
<html>
<head>
   <title>Dashboard</title>
   <link rel="stylesheet" href="css/style.css">
</head>


<body>


<div class="container">


   <?php include 'pages/sidebar.php'; ?>


   <div class="main">


       <!-- TITLE -->
       <h2>1. Add Student Records</h2>
       <p class="subtitle">Input student details (ID, name, etc.)</p>


       <!-- CARD SECTION -->
       <div class="section-box">


           <!-- LEFT MINI SIDEBAR (inside card) -->
          


           <!-- RIGHT CONTENT -->
           <div class="content-box">
               <div class="top-bar">
                   <h3>Add Student</h3>
                   <span class="admin">Admin</span>
               </div>


               <form>
                   <div class="form-grid">
                       <input type="text" placeholder="Enter student ID">
                       <input type="text" placeholder="Enter student name">
                       <input type="text" placeholder="Enter course">
                       <input type="text" placeholder="Enter year">
                       <input type="email" placeholder="Enter email address">
                   </div>


                   <button class="btn">Save Student</button>


                
                   </form>
         


<a href="/student-system/index.php"></a>
<a href="/student-system/pages/add.php"></a>
<a href="/student-system/pages/search.php"></a>
<a href="/student-system/pages/update.php"></a>
<a href="/student-system/pages/delete.php"></a>
<a href="/student-system/pages/students.php"></a>
          
               </div>




       </div>


   </div>


</div>


</body>
</html>

