<?php 

$con = mysql_connect("localhost","root","");
   if (!$con)
   {
   		die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());
   }

   $database = mysql_select_db("ipsjumbo",$con);

   if (!$database)
   	{
   		die('<script>alert("ERROR AL CONECTAR CON LA BASE DE DATOS:")</script>'.mysql_error());
   	}

   mysql_set_charset('utf8')

?>