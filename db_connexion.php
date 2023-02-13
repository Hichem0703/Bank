<?php
   
    function conn() {
        require "db_identifiant.php";
        try {
            $connection = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "bonjour";
            return $connection;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
?>