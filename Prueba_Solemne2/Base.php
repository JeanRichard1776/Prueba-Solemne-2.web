<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Connectar";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Coneccion rechazada".$conn->connect_error);
} else {
           $Email=$_POST['Email'];
           $password=$_POST['password'];
$sql = "SELECT Email,password FROM usuario WHERE Email='$Email' AND password='$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    require_once 'index.php';
} else {
    echo "No hay este cuenta";    
}
$conn->close();

