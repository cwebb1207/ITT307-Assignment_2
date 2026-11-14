
<?php

// Start the current session so PHP can access it.
session_start();

// Remove all session variables.
// This clears the administrator's stored login information.
$_SESSION = [];

// Destroy the session.
// The administrator will no longer be logged in.
session_destroy();

// Redirect the administrator to the login page.
header("Location: index.php");

// Stop executing the remaining PHP code.
exit;

?>