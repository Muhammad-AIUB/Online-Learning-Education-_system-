<?php 
                                 
$hostname="localhost";      
$dbuser="root";    
$dbpassword="";      
$dbname="otesdb";  

$conn=mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);      

if(!$conn){
    die("Something went wrong!");    
}

?>