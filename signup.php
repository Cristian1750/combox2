<?php

//recibir los datos del formulario de registro
require __DIR__ . '/database.php';

//recibir los datos del formulario de registro
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$m_phone = $_POST['mphone'];
$e_mail = $_POST['email'];
$p_assword = $_POST['pswd'];
$pass_emc  =md5($p_assword); //encriptar la contraseña con md5
//insertar los datos en la base de datos variable 
$sql = "insert into users(  firstname, lastname, mobile_phone, email, password) 
    VALUES ('$f_name', '$l_name', '$m_phone', '$e_mail', '$pass_emc')";


  //ejecutar la consulta en la base de datos
    $local_res= pg_query($localconn, $sql);
    $supa_res= pg_query($supa_conn, $sql);
//verificar si la consulta se ejecuto correctamente
  if($local_res){
    echo "<br>User has been created successfully into local database!!!";}
    else{
        echo "<br>User hasn't been created into local database!!!";}
//verificar si la consulta se ejecuto correctamente
    if($supa_res){
        echo "<br>User has been created successfully into supabase database !!!";}
        else{
            echo "<br>User hasn't been created into supabase database !!!";}

//redireccionar a la pagina de inicio de sesion
echo"<script>alert('User has been created successfully!!!');</script>";
//redireccionar a la pagina de inicio de sesion
header('refresh: 0; url=login.html');

?>