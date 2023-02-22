<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/formulario.css" />
  <title>Document</title>
</head>

<body>
  <div class="formContainer">
    <form action="cadastrar.php" method="post">
      <h3>Formulário de Cadastro</h3>
      <fieldset class="container">
        <label for="nome">Nome:
          <input type="text" name="nome" required minlength="3" />
        </label>

        <label for="email">E-mail:
          <input type="email" name="email" required minlength="13" />
        </label>

        <label for="senha">Senha:
          <input type="password" name="senha" required minlength="5" />
        </label>

        <input type="submit" name="cadastrar" />
      </fieldset>
    </form>
  </div>
</body>

</html>