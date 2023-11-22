<?php

$conectar=mysqli_connect('localhost', 'root', '', 'telas_trueno') or die(mysql_error($mysqli));

insertar($conectar);

function insertar($conectar){
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$consulta="INSERT INTO data(Nombre, Correo, Telefono, Mensaje) VALUES('$name','$mail','$phone','$message')";

mysqli_query($conectar, $consulta);

header("Location: index.html");

}




?>