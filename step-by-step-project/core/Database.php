<?php

$host = "localhost";
$username ="root";
$password = "";
$dbname= "stepbystep";
$connect_database=mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()){
    echo "pas de connexion";
    exit();
}
 else{
    echo " database connecté ";
 }

?>