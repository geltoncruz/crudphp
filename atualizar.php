<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alterar produto</title>
  </head>
  <body>
    <h1>Alterar produtos</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>?status=update&codigo=<?=$codigo?>" method="post">
      <?php

         $query = "select * from produto where codigo = $codigo";
         $result = mysql_query($query);
          $linha = mysql_fetch_array($result,MYSQL_ASSOC);
       ?>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Nome:" value="<?php echo $linha['nome']; ?>">

      <label for="preco">Preço:</label>
      <input type="text" name="preco" placeholder="Preço" value="<?php echo $linha['preco']; ?>">

      <textarea name="descricao"><?php echo $linha['descricao']; ?></textarea>

      <button>Cadastrar</button>
    </form>
  </body>
</html>
