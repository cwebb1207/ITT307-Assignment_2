<?php
// Start the PHP session.
session_start();

$title = "Log in to Admin Dashboard";

include "config.php"; // database connection file
include('includes\header.php');


// If the administrator is already logged in,
// redirect them directly to the dashboard.
if (isset($_SESSION["user_id"])) {
    header("Location: ADMIN_dashboard.php");
    exit;
}

// Create a Database object and connect to MySQL.
$database = new Database();
$db = $database->getConnection();

// Variable used to display login errors.
$errorMessage = "";

// Check whether the login form was submitted.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve the submitted email and password.
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Check whether either field is empty.
    if ($email === "" || $password === "") {

        $errorMessage = "Please enter your email and password.";

    } else {

        // Find the administrator account using the submitted email.
        $sql = "SELECT id, name, email, password_hash
                FROM users
                WHERE email = ?";

        // Prepare and execute the SQL query.
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);

        // Retrieve the matching account.
        $user = $stmt->fetch();

        // Verify the submitted password against the stored password hash.
        if ($user && password_verify($password, $user["password_hash"])) {

            // Generate a new session ID after successful login.
            session_regenerate_id(true);

            // Store administrator information in the session.
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["user_email"] = $user["email"];

            // Redirect to the administrator dashboard.
            header("Location: dashboard.php");
            exit;

        } else {

            // Display a general error for incorrect login details.
            $errorMessage = "Invalid email or password.";
        }
    }
}

?>

<body>
    <div id="content">
    
    <?php include('includes\nav.php'); ?>

        <h1>Admin Login</h1>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="Login" value="Login">
        </form>
<?php
        echo "<p style='color:red;'>{$_SESSION['user_id']}</p> <BR>";
        echo "<p style='color:red;'>{$_POST['email']}</p>";
        echo "<p style='color:red;'>{$_SESSION['user_id']}</p>";
        echo $_SESSION['user_email'] . "</p>";
?>
        
    <?php include('includes\footer.php'); ?>

    </div>
</body>