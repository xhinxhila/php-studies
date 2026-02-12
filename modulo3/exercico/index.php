
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a ></a>
    <form action="login.php" method="post">
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" required> <br>
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required> <br>
        <label for="lembrar">
            <select name="tema" id="">
                <option value="escuro">escuro</option>
                <option value="claro">claro</option>
            </select>
        </label> <br>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>