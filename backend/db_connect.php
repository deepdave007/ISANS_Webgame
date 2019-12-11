<?php
    /**
     *  Creates and returns a mysqli database connection to the database: "isans_quiet_journey"
     */ 
    function getDbConnection() {
        $db_host = "db.cs.dal.ca";
        $db_user = "isans";
        $db_pass = "B00isans";
        $db_title = "isans";

        // create connection
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_title);

        // check connection
        if ($error = $conn->connect_error)
            die ("Connection failed: " . $error);
        else
            return $conn;
    }
?>