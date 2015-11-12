<!DOCTYPE html>
<?php
include_once("conexao.php");
$codigo = $_GET['codigo'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
  </head>
  <body>
    <h1>Cadastrar produtos</h1>
    <form action="" method="post">
      <?php
       $query = "SELECT * FROM produto where codigo = $codigo" ;
       $result = mysql_query($query);
       $linha = mysql_fetch_array($result,MYSQL_ASSOC);
      ?>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Nome:">

      <label for="preco">Preço:</label>
      <input type="text" name="preco" placeholder="Preço">

      <textarea name="descricao"></textarea>

      <button>Atualizar</button>
    </form>
  </body>
</html>
