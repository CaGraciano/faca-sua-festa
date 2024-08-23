<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      text-align: center;
    }
    .table-container {
      max-width: 1000px;
      margin: 0 auto;
    }
    .table {
      background-color: #fff;
      color: #000;
    }
    .btn {
      margin-top: 10px;
      border-radius: 15px;
      font-weight: bold;
      font-size: 16px;
      padding: 10px 20px;
    }
    .btn-primary, .btn-danger {
      background-color: #fff;
      color: #000;
      border: none;
    }
    .btn-sm {
      margin-top: 0;
      padding: 5px 10px;
      font-size: 14px;
    }
    .product-img {
      width: 50px;
      height: 50px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <?php include 'cabecalho.php'; ?>

  <div class="container"><br>
    <h1>Produtos Cadastrados</h1><br>
    <div class="table-container">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Imagem</th>
            <th scope="col">SKU</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td><img src="caminho-para-imagem.jpg" alt="Produto Exemplo" class="product-img"></td>
            <td>12345</td>
            <td>Produto Exemplo</td>
            <td>Categoria Exemplo</td>
            <td>R$ 99,99</td>
            <td>10</td>
            <td>
              <button class="btn btn-primary btn-sm">Alterar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
            </td>
          </tr>
          <tr>
            <td><img src="caminho-para-imagem.jpg" alt="Produto Exemplo" class="product-img"></td>
            <td>12345</td>
            <td>Produto Exemplo</td>
            <td>Categoria Exemplo</td>
            <td>R$ 99,99</td>
            <td>10</td>
            <td>
              <button class="btn btn-primary btn-sm">Alterar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
            </td>
          </tr>
          <tr>
            <td><img src="caminho-para-imagem.jpg" alt="Produto Exemplo" class="product-img"></td>
            <td>12345</td>
            <td>Produto Exemplo</td>
            <td>Categoria Exemplo</td>
            <td>R$ 99,99</td>
            <td>10</td>
            <td>
              <button class="btn btn-primary btn-sm">Alterar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
            </td>
          </tr>
          <tr>
            <td><img src="caminho-para-imagem.jpg" alt="Produto Exemplo" class="product-img"></td>
            <td>12345</td>
            <td>Produto Exemplo</td>
            <td>Categoria Exemplo</td>
            <td>R$ 99,99</td>
            <td>10</td>
            <td>
              <button class="btn btn-primary btn-sm">Alterar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  
  <?php include 'rodape.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
