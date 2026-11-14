<?php

class Database {
    // These variables store the information needed to connect to MySQL.
    // The address of the computer running MySQL.
    // PDO connection
    private $host = 'localhost';
    private $username = 'root';
    private $password = ''; //mysql password

    // The name of the database we created using MySQL.
    public $sql_schema = 'database/portal.sql';
    public $database_path = '';

    private $database = "itportal";

    private function createItportalDatabase() {//I know this ignores possible errors that could occur. But it'll work
            //quickly connects using mysqli
            $connection = new mysqli($this->host, $this->username, $this->password);
            echo "Creating The Database<br>";
            //reads the sql schema file
            $sql = file_get_contents($this->sql_schema);
            //executes the sql queries
            $connection->multi_query($sql);
            echo "DATABASE CREATED SUCCESSFUL";
            $connection->close();
            header("Location: index.php"); //redirect to restart page
            }


     // This function will create and return a database connection.
    public function getConnection(){
        try {
            // PDO creates the connection between PHP and MySQL.
            $connection = new PDO(
                "mysql:host=" . $this->host .
                ";dbname=" . $this->database .
                ";charset=utf8mb4",

                // MySQL login credentials.
                $this->username,
                $this->password
            );

            // Tell PDO to report database errors as exceptions.
            $connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $connection->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

            // Make PDO use real prepared statements where supported.
            $connection->setAttribute(
                PDO::ATTR_EMULATE_PREPARES,
                false
            );

            // Return the successful database connection.
            return $connection;

        }
        catch (PDOException $exception) {
            echo"NO DATABASE FOUND<br>";
            //create the database immediately, The error message need not be displayed
            $this->createItportalDatabase();           
            // Display an error if PHP cannot connect to MySQL.
            die("Database connection failed: " . $exception->getMessage());
        }

    }
}





/*

#PDO Query
$stmt = $pdo->query('SELECT * FROM Cources');

#creating a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ) 

*/


    // Create Row in the Database

    // Select row from the database

    // Update row from the database

    // Delete a row from the database




# resources 
# https://www.youtube.com/watch?v=kEW6f7Pilc4
#https://www.youtube.com/watch?v=zZ6vybT1HQs

#php pdo
#https://www.php.net/manual/en/book.pdo.php

#RBAC
#https://medium.com/@wwwebadvisor/implementing-role-based-access-control-rbac-in-php-85c0ea7bc86b
#https://www.youtube.com/watch?v=VLBp3pJFSQc  Advanced PHP


#login system
#https://www.youtube.com/watch?v=BaEm2Qv14oU

#toast
#https://www.w3schools.com/howto/howto_js_snackbar.asp

?>