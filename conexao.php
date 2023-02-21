<?php
//criar variaveis
$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "dbcaduser";

//criar conexao
$dbconnection = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
