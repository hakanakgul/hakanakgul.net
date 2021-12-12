<?php

try{
  $database = new PDO("mysql:host=localhost;dbname=hakanakg_database;charset=utf8","databasename","password");
}
catch(PDOException $ex){
  echo $ex->getMessage();
}
