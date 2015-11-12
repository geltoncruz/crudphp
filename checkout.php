<?php
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];

  include_once("conexao.php");

  $insert = "INSERT INTO produto (nome,preco,descricao)";
  $insert .=" VALUES ('$nome',$preco,'$descricao')";

  $query = mysql_query($insert);
  if($query){
    echo "Produto cadastrado com sucesso!";
  }
  $close = mysqli_close($conn);

?>
