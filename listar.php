<?php
  include_once("conexao.php");

  if($_GET['status'] == "delete"){
      $codigo = mysql_real_escape_string($_GET['codigo']);
      $q = "delete from produto where codigo = $codigo";
      $query = mysql_query($q);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar produtos</title>
  </head>
  <body>
    <header><h1>Lista de produtos</h1></header>
    <NAV>
      <a href="cadastro.php">Cadastrar</a>

    </NAV>
    <table border="1">
      <thead>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Preco</th>
        <th>Observacao</th>
        <th>atividade</th>
      </thead>
      <tbody>
    <?php
     $query = "SELECT * FROM produto";
     $result = mysql_query($query);
     while($linha = mysql_fetch_array($result,MYSQL_ASSOC)){
    ?>
        <tr>
          <td><?=$linha['codigo']; ?></td>
          <td><?=$linha['nome']; ?></td>
          <td><?=$linha['preco']; ?></td>
          <td><?=$linha['descricao'] ?></td>
          <td>
            <a href="atualizar.php?codigo=<?=$linha['codigo']; ?>">Atualizar</a><br>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?status=delete&codigo=<?php echo $linha['codigo'];?>">Remover</a>

          </td>
        </tr>
        <?php
        }
        mysql_free_result($result);
       ?>
      </tbody>
    </table>

  </body>
</html>
