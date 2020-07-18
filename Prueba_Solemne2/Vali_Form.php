<?php

function debug($variable){
    echo "<pre>". print_r($variable,true)."<pre>";
}

if(!empty($_POST)){
    $errors=array();
    if(empty($_POST['Email'])){
        $errors="Correo Electronico vacio,por favor ingresar tus datos";
    } elseif (!filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL)) {
    $errors="Correo Electronico no es valido";
    }
    if(empty($_POST['password'])){
        $errors="Contrasena vacio,por favor ingresar la";
    } elseif (mb_strlen($_POST['password'])<8) {
    $errors="COntrasena muy pequeno ,minimo 8 caractesis";
}
if(empty($errors)){
    require_once 'Base.php';
} else {
    debug($errors);    
}
}

