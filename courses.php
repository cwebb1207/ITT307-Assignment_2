<?php
include('config.php');
$title = "Courses";
include('includes\header.php');

    $database= new Database();
    $db = $database->getConnection();
    $sql= 'SELECT * FROM courses';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $courses = $stmt->fetchALL();
?>

<body>
    <div id="content">
    
    <?php include('includes\nav.php'); ?>
    
    <form>
    <label>Search Courses</label><br>
    <input type="text" name="search" placeholder="Search">
    </form>

    <h1>Courses Currently Offered</h1>
    <table>
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Credits</th>
                <th>Prerequisites</th>
                <th>Course Description</th>
            </tr>
            <?php
            foreach ($courses as $course) {
                echo "<tr>";
                echo "<td>{$course['code']}</td>";
                echo "<td>{$course['name']}</td>";
                echo "<td>{$course['credits']}</td>";
                echo "<td>{$course['prerequisites']}</td>";
                echo "<td>{$course['description']}</td>";
            }
            ?>
    </table>
    <?php include('includes\footer.php'); ?>
    </div>
</body>