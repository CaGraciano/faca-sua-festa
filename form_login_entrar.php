<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      text-align: center;
    }
    .form-container {
      max-width: 400px;
      margin: 0 auto;
    }
    .btn-primary {
      width: 20%;
      background: linear-gradient(180deg, #5900AD 0%, #9900CC 100%);
    }
    .form-label {
      display: block;
      float: left;
    }
    .form-check {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-check-input {
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <?php include 'cabecalho.php'; ?>

  <div class="container">
    <img src="img/logos/FaçaSuaFesta-Logo-Branco-2.png" class="img-fluid" alt="Logo"><br><br>
    <div class="form-container">
      <h1>Entrar</h1>
      <form id="loginForm">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="lembrar">
          <label class="form-check-label" for="lembrar">Lembrar-me</label>
          <div class="row justify-content-center">
          <button type="button" class="btn btn-primary btn-lg btn-block">Entrar</button>
          <button type="button" class="btn btn-secondary btn-lg btn-block">Cadastre-se</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'rodape.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
