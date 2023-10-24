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
                <a class="nav-link " href="processar_login.php">ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="envioNoticias.php">Notícias dos usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="usuarios.php">Usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--fim navbar-->
    <!--inicio copor site-->
    <h2 class="titulo">ASSOCIAÇÃO DE MORADORES DO RESIDENCIAL ESTÂNCIA QUINTAS DA ALVORADA E MORADORES DO SETOR
    HABITACIONAL SHDB TRECHO 2</h2>


    

    <div class="formEnvioNoticias">
        <form action="processarNoticia.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="titulo" placeholder="Título" required>
            <br>
            
            <textarea name="corpo" placeholder="Corpo da Matéria" required></textarea>
            <br>
            
            <input id="inputArquivo"type="file" name="imagem" accept="image/*" required>
            <br>
            
            <input id="buttonEnviar" type="submit" value="Enviar">
        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>