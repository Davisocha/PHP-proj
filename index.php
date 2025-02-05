<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H2>Formulario de login</H2>
    <form action="login.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>