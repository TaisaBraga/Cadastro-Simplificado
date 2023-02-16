<?php
$hostname = "localhost";
$bancodedados = "dbcaduser";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
  echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
} else
  echo "Conectado ao banco de dados";
