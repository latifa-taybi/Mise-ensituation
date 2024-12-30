<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="registre";

$dsn ="mysql:host=" . $servername . ";dbname=" . $dbname; 
try{
    $pdo= new pdo($dsn, $username, $password);
    echo "connected";
} catch (PDOException $e){
    echo "failed";
}
?>

