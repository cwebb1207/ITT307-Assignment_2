
<?php
session_start();
$title = "Admin Dashboard";
include('includes\header.php');
?>

<body>
    <div id="content">
    <?php include('includes\nav.php'); ?>
    <aside class="dashboard-sidebar">

        <div class="sidebar-heading">

            <h2>Admin Portal</h2>

            <p>Administration</p>
        </div>

        <!-- Dashboard navigation links. -->
        <nav class="sidenav">
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="admin/messages.php">Contact Messages</a>
            <a href="#">Students Portal</a>
            <a href="#">Faculty Portal</a>
            <a href="#">Add New Users</a>
            <a href="logout.php" class="logout-link">Logout</a>

            <script>
            </script>
        </nav>
    </aside>


<section class="admin-panel">
<?php
    function studentPortal(){
        echo "Student Portal";
    }
    function facultyPortal(){
        echo "Faculty Portal";
    }
    function userPortal(){
        echo "Add New Users";
    }
?>
</section>

    <?php include('includes\footer.php'); ?>

    </div>
</body>