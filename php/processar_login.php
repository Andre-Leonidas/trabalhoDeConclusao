<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        
        
        
        if ($username == "admin" && $password == "123456") {
            
            echo "Login realizado com sucesso!";
        } else {
            
            echo "Usuário ou senha inválidos!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>AMOREQA</title>
</head>
<body>
    <p id="olaUser">
    Olá Admin, boa tarde!
    <?php echo date('d/m/Y H:i:s'); ?>
    <p>
    <!--inicio navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html">AMOREQA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../quemsomos.html">Quem somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../noticias.html">Notícias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../php/cadastro.php">Cadastro</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../php/login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="processar_login.php">ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="envioNoticias.php">Notícias dos usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--fim navbar-->
    <!--inicio copor site-->

    <h2 class="titulo">ASSOCIAÇÃO DE MORADORES DO RESIDENCIAL ESTÂNCIA QUINTAS DA ALVORADA E MORADORES DO SETOR
    HABITACIONAL SHDB TRECHO 2</h2>
    <!-- inicio coropo-->
    
    
    
    
    
 
    



    <!-- fim coropo-->
     <!--inicio rodape site-->
  <div class="container my-5">
  <footer>
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #000000;">Telefones de emergência</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" style="color: #000000;">Polícia - 190</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;">Primeiros socorros - 193</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;">Defesa civíl (Alagamentos ou Delizamentos)- 199</a>
            </li>

          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #000000;">Whats da comunidade</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" style="color: #000000;">(55) 65 98888-8889</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #000000;">Parceiros</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" style="color: #000000;">Quentinhas da Jú</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;">Laura adestramentos</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;"> Pet Shop Amigo  Feliz</a>
            </li>
            <li>
              <a href="#!" style="color: #000000;">Mercado do Juares</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #000000;">Contatos E-mail</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" style="color: #000000;">adm@amoreqa.com.br</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;">lucas@amoreqa.com.br</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #000000;">paulo@amoreqa.com.br</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3">
      © 2023 Copyright: André Leonidas
    </div>

  </footer>




    <!--fim copor site-->




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>