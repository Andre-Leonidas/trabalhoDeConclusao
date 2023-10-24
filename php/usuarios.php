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
                <a class="nav-link" href="envioNoticias.php">Notícias dos usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="usuarios.php">Usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--fim navbar-->
    <!--inicio copor site-->
    <h2 class="titulo">ASSOCIAÇÃO DE MORADORES DO RESIDENCIAL ESTÂNCIA QUINTAS DA ALVORADA E MORADORES DO SETOR
    HABITACIONAL SHDB TRECHO 2</h2>


    <h1>Dados Cadastrados</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        <?php
        
        $dados = array(
            array("João Silva", "1990-05-12", "Rua A, 123", "(11) 1234-5678", "joao@example.com"),
            array("Maria Santos", "1988-09-21", "Rua B, 456", "(11) 9876-5432", "maria@example.com")
        );

        foreach ($dados as $cadastro) {
            echo "<tr>";
            echo "<td>{$cadastro[0]}</td>";
            echo "<td>{$cadastro[1]}</td>";
            echo "<td>{$cadastro[2]}</td>";
            echo "<td>{$cadastro[3]}</td>";
            echo "<td>{$cadastro[4]}</td>";
            echo "<td>";
            echo "<button class='edit-btn'>Editar</button>";
            echo "<button class='delete-btn'>Excluir</button>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>