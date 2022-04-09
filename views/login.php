<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>LOGIN</h1>
        <a href="usuarios.php">Voltar</a>
        <form action="fazerLogin.php" method="POST">
            <fieldset>
                <legend>Login</legend>

              
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" placeholder="Login">
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <br>
                <button type="submit">Login</button>
            </fieldset>
        </form>
    </body>
</html>