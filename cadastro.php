<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
  </head>
  <body>
    <h1>Cadastrar produtos</h1>
    <form action="checkout.php" method="post">

      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Nome:">

      <label for="preco">Preço:</label>
      <input type="text" name="preco" placeholder="Preço">

      <textarea name="descricao">Descricação</textarea>

      <button>Cadastrar</button>
    </form>
  </body>
</html>
