<?php
include('config.php');
//include objects.php;
$title = "Home";
include('includes/header.php');
?>

<body>
    <div id="content">
    <?php include('includes/nav.php'); ?>
        <section class = "grid-container-2">
            <article>
                <h1>Get Certified Today</h1>
                <p>We are a well renowned instition of Higher Learning in Jamaica. Come study with us</p>
            </article>
            <article>
                <img src="images/people_certified.png" alt="Certified Persons" width="100%">
            </article>
        </section>    
            <h5>Browse our World-Class, Internationally Accredited Programmes</h5>
            <a class = "heroButton" href="courses.php">Courses</a>
            <br><br>
        <div>
        </div>
        <?php include('includes/footer.php'); ?>  
    </div> <!--content div ends here-->
</body>

</html>

<?php 

/*

            
        <?php include('application_form.php'); ?>



            <?php
            
            
            
            ?>






#TO DO

create person class
    Student and Staff will inherit from the person class
    create functions to interact with the database
    create frontend pages to query the database
    create login and sessions draft
    create admin pages for faculty
    create admin pages for students // limited access admin to only update personal information

required pages -

home password
cources Pages
    add course, remove course, view all courses, edit Course
student page 
    view offered courses, view enrolled courses, // dynamic buttons that only appear on certain senarions
Admin 
    add lectureres - add students, add courses.

    */
?>











