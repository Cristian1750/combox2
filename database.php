<?php
    //http://localhost:8080/combox/config/database.php
    //credenciales de acceso 
    //local connection 
    $local_host     = "localhost"; //127.0.0.1
    $local_port     = "5432";
    $local_user     = "postgres"; 
    $local_dbname   = "combox";
    $local_password = "unicesmag";
    
    //supabase connection
    $supa_host     = "aws-0-us-east-1.pooler.supabase.com"; //127.0.0.1
    $supa_port     = "6543";
    $supa_user     = "postgres.yytdreefbjifrlwjwwde";
    $supa_dbname   = "postgres";
    $supa_password = "unicesmag@@";

    //funcion de posrtgres para conectar con la base de datos 
    $localconn =pg_connect("
        host=$local_host 
        port=$local_port 
        dbname=$local_dbname 
        user=$local_user 
        password=$local_password  
    ");

    //funcion de posrtgres para conectar con la base de datos
     $supa_conn =pg_connect("
        host=$supa_host
        port=$supa_port
        dbname=$supa_dbname 
        user=$supa_user
        password=$supa_password
    ");

    //verificar la conexion
    if(!$localconn){
        die("Error local connection!!!");
    }else{
        echo "<br>Local Connection success !!!";
    }

     if(!$supa_conn){
        die("Error supabase connection!!!");
    }else{
        echo "<br>Supabase Connection success !!!";
    }
?>