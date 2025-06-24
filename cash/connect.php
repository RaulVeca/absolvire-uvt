
<?php 
    // Load .env file (corrected path)
    $dbconfig = parse_ini_file(__DIR__ . '/../../.env');

    // Check if .env file is loaded correctly
    if ($dbconfig === false) {
        die("Error: Unable to load .env file.");
    }

    // Assign database credentials
    $servername = $dbconfig["DB_HOST"];
    $username = $dbconfig["DB_USERNAME"];
    $password = $dbconfig["DB_PASSWORD"];
    $dbname = $dbconfig["DB_DATABASE"];

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully!";
?>
