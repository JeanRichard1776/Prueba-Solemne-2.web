<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Connectar";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Coneccion rechazada".$conn->connect_error);
}
$stmt=$conn->prepare("SELECT INTO produit(image,color,talla)
        VALUES(?,?,?)");
$stmt->bind_param("sss", $image,$color,$talla);
$image=$_POST['image'];
$color=$_POST['color'];
$talla=$_POST['talla'];
$stmt->execute();
echo "Pedido enviando";
$stmt->close();
$conn->close();


