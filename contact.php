<?php
session_start();
$title = "Contact The HOD";
include('includes\header.php');
?>

<body>
    <div id="content">
    
    <?php include('includes\nav.php'); ?>

    <h1>Contact Our HOD</h1>

     <form>
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br>
        <span id="first_name_label" class="labelsT"></span>
        <br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <span id="email_label" class="labelsT"></span>
        <br><br>
        <label for="subject">Subject:</label><br>
        <input id="subject" name="subject" required><br>
        <span id="subject_label" class="labelsT"></span>
        <br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br>
        <span id="message_label" class="labelsT"></span>
        <br><br>
        <button type="submit">Send Message</button>
    </form>
    <?php include('includes\footer.php'); ?>
    </div>
</body>