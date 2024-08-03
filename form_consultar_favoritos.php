<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favoritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #8a2be2;
      color: #fff;
    }
    .container {
      padding-top: 50px;
      text-align: center;
    }
    .card {
      background-color: #fff;
      color: #000;
      margin-bottom: 20px;
    }
    .card-img-top {
      width: 100%;
      height: 200px;
      object-fit: cover;
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
      padding: 5px 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <?php include 'cabecalho.php'; ?>

  <div class="container">
    <h1>Favoritos</h1>
    <div class="row">
      <!-- Exemplo de item favorito -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 99,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>
      <!-- Fim do exemplo de item favorito -->
      <!-- Mais itens favoritos serão listados aqui -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
