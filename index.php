<?php

include_once('db.php');

$conectar=conn();

$rut=$_POST['rut'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fechadenacimiento=$_POST['fechadenacimiento'];
$estadocivil=$_POST['estadocivil'];
$comentarios=$_POST['comentarios'];



$verificar_rut = mysqli_query($conectar, "SELECT * FROM usuario WHERE rut='$rut' ");
if (mysqli_num_rows($verificar_rut)>0){
  
    ?>
    <script>
    confirm("Usuario ya existe, desea sobreescribir");

    </script>

    <?php
 }

else { 
    $sql="INSERT INTO usuario (rut, nombres, apellidos, direccion, ciudad, 
    telefono, email, fechadenacimiento,estadocivil, comentarios) VALUES ('$rut', '$nombres', '$apellidos',
    '$direccion', '$ciudad', '$telefono', '$email', '$fechadenacimiento', '$estadocivil',
    '$comentarios')";
    $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed SQL- Error: ".mysqli_error($conectar), E_USER_ERROR); 
        
    }
?> 