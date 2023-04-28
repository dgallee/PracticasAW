<?php

function buildFormularioRegister($username='', $email='', $password='')
{
    $ruta=RUTA_APP."/index.php";
    return <<<EOS
    <form action=$ruta method="POST">
        <fieldset>
            <legend>Datos del usuario</legend>
            <div>
            <label>Correo:</label> <input required type="email" name="email" id="campoEmail" email="$email" />
                <span id="correoVacio"> ❌ </span>
                <span id="correoOK"> ✔ </span>
                <span id="correoMal"> ⚠ </span>
            </div>
            <div>
                <label>User:</label> <input required type="text" name="username" id="campoUser" value="$username" />
                <span id="userVacio"> ❌ </span>
                <span id="userOK"> ✔ </span>
                <span id="userMal"> ⚠ </span>
            </div>
            <div>
                <label>Password:</label> <input required type="password" name="password" password="$password" /><br />
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </fieldset>
    </form>
   
    EOS;
}


?>