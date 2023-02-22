<?php
include_once('conexao.php');

//receber a informacao
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

//inserir na table usuario (nome das colunas) os valores (nome das variaveis)
$save_user_values = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

$return_save_user_values = mysqli_query($dbconnection, $save_user_values);

if ($return_save_user_values) {
  echo ('<script>alert("Usuário cadastrado com sucesso")</script>');
} else {
  echo ('<script>alert("Erro ao cadastrar usuário")</script>' . mysqli_error($dbconnection));
}

mysqli_close($dbconnection);
