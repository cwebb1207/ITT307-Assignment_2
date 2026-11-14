<?php
session_start();
include('config.php');
    $database= new Database();
    $db = $database->getConnection();
    $sql = "SELECT id, name, position, phone, email, photo FROM staff";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $staffs = $stmt->fetchALL();
$title = "Faculty Us";
include('includes\header.php');
?>

<body>
    <div id="content">
    <?php include('includes\nav.php'); ?>
    <h1>Our Highly Effective Team</h1>
    <div class="grid-container-3">
    <?php 
        foreach ($staffs as $staff){
            echo "<li>";
            echo "<div class='card'>";
            echo "<img src='uploads/{$staff['photo']}' alt='customer photo' style='width:100%'>";
            echo "<div class='container'>";
            echo "<p>{$staff['position']}</p>";
            echo "<h3><b>{$staff['name']}</b></h3>";
            echo "<p>{$staff['phone']}</p>";
            echo "<p>{$staff['email']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</li>";
            }
            ?>
    </div>
    <?php include('includes\footer.php'); ?>
    </div>
</body>