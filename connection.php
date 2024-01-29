<?php
error_reporting(E_ERROR | E_PARSE);
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "real_state_listing_properties";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if (!$conn) {
        throw new Exception("Could not connect to database");
    }

} catch (Exception $e) {

    error_log("Database Connection Error: " . $e->getMessage(), 0);
    echo "There is an issue connecting to the database";

}
?>