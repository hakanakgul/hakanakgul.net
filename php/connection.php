<?php
    try {
            $db = new PDO("mysql:host=localhost;dbname=haganyac_database", "databasename", "password");
            $db->exec("SET NAMES 'UTF-8'");
            $db->exec("SET CHARACTER SET 'UTF-8'");
        }
    catch ( PDOException $e ){
            //error message. 
            print $e->getMessage();
        }
