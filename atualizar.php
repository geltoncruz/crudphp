<!DOCTYPE html>
<?php
include_once("conexao.php");
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
  </head>
  <body>
    <h1>Cadastrar produtos</h1>
    <form action="" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Nome:">

      <label for="preco">Preço:</label>
      <input type="text" name="preco" placeholder="Preço">

      <textarea name="descricao"></textarea>

      <button>Atualizar</button>
    </form>
  </body>
</html>
