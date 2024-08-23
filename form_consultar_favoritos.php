<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favoritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
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

  <div class="container"><br>
    <h1>Favoritos</h1><br>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 1</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 99,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 2</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 149,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 3</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 199,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 4</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 249,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 5</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 299,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="card">
          <img src="caminho-para-imagem.jpg" class="card-img-top" alt="Produto Exemplo">
          <div class="card-body">
            <h5 class="card-title">Produto Exemplo 6</h5>
            <p class="card-text">Categoria Exemplo</p>
            <p class="card-text">R$ 349,99</p>
            <button class="btn btn-danger btn-sm">Remover</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'rodape.php'; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
