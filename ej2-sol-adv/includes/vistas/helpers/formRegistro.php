<?php

function buildFormularioRegister($username='', $email='', $password='')
{
    $ruta=RUTA_APP."/includes/vistas/helpers/process/procesarRegister.php";
    return <<<EOS
    <form id="formRegister" action=$ruta method="POST">
        <fieldset>
            <legend>Register new user</legend>
            <div><label>Name:</label> <input type="text" name="username" value="$username" /></div>
            <div><label>Email:</label> <input type="email" name="email" email="$email" /></div>
            <div><label>Password:</label> <input type="password" name="password" password="$password" /></div>
            
            <div><button type="submit">submit</button></div>
        </fieldset>
    </form>
   
    EOS;
}

?>