<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $loginCorreto = "admin";
    $senhaCorreta = "senha123";

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($login == $loginCorreto && $senha == $senhaCorreta) {
        
        header("Location: pagina_admin.php");
        exit();
    } else {
        
        $erro = "Login ou senha incorretos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <?php if (isset($erro)) { ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>