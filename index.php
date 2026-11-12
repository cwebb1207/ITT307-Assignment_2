
# Pages must not contain SQL;

include config.php
include objects.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include '/includes/header.php'; ?>


<?php include __DIR__ . '/includes/footer.php'; ?>    
</body>

</html>

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
    add lectureres - add students, add courses












