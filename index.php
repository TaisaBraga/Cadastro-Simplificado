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
  <div class="formContainer">
    <form action="index.php" method="post">
      <h3>Formulário de Cadastro</h3>
      <fieldset class="container">
        <label for="nome">Nome:
          <input type="text" name="nome" />
        </label>

        <label for="email">E-mail:
          <input type="email" name="email" />
        </label>

        <label for="senha">Senha:
          <input type="password" name="senha" />
        </label>

        <input type="submit" name="Cadastrar" />
      </fieldset>
    </form>
  </div>
</body>

</html>