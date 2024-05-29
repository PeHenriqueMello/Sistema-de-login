<?php

$hostname= 'localhost';
$username= 'root';
$password= '';
$dbname= 'sistema_login';

$con= new mysqli($hostname, $username, $password, $dbname);

if($con -> connect_error){
  die("Incapaz de conectar ao banco de dados");
}

