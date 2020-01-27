<?php
    function conectar( ){

        $user="root";
        $pass="";
        $SERVER="localhost";
        $db="usuarios";
        $con=mysql_connect($SERVER,$user,$pass) or die ("Error en la conexcion".mysql_error());
        mysql_select_db($db,$con);
        
        return $con;
    }

?>