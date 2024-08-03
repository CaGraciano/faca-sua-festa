<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
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
    .form-container {
      max-width: 400px;
      margin: 0 auto;
    }
    .btn {
      margin-top: 10px;
      border-radius: 15px;
      font-weight: bold;
      font-size: 16px;
      padding: 10px 20px;
    }
    .btn-primary {
      background-color: #fff;
      color: #000;
      border: none;
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
    <img src="FaçaSuaFesta-Logo-Branco.png" class="img-fluid" alt="Logo"><br><br>
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
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form><br><br>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
