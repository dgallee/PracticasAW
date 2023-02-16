<!DOCTYPE html>
<html>
<head>
    <title>Login</title> 
    <style type="text/css">
    h1 { text-align: center; }
    td { padding: 0.2em 2em ; }
    </style>
</head>
<body>
    <h1>Registro/Login.</h1>
    <form method="post" action="ProcesarLogin.php" name="signin-form">
    <div class="form-element">
        <label>Username:</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <br>
    <div class="form-element">
        <label>Password:</label>
        <input type="password" name="password" required />
    </div>
    <br>
    <button type="submit" name="login" value="login">Log In</button>
</form>

</body>
</html>

