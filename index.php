<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inicial-scale=1.0">

  <link rel="stylesheet" href="css/formulario.css" />
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <fieldset class="container">
      <legend>Formulário de Cadastro</legend>
      <label for="nome">Nome</label>
      <input type="text" name="nome" />
      <label for="email">E-mail</label>
      <input type="email" name="email" />
      <label for="senha">Senha</label>
      <input type="password" name="senha" />
      <input type="submit" name="Cadastrar" />

    </fieldset>
  </form>
</body>

</html>