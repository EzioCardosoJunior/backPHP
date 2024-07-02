<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <form action="conectPhp/dataUser.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <br><br>
    <button type="submit">Cadastrar</button>
