<!DOCTYPE html>
<html lang="es">
<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 echo '<p> Hola '. $password .'</p>';
 echo '<p> Hola '. $username.' </p>';

if($username == "user" && $password == "userpass"){
    $login = true;
    $esadmin = false;
    echo '<p> Hola'. $esadmin .'</p>';
}
elseif($username == "admin" && $password == "adminpass"){
    $login = true;
    $esadmin = true;
}
else{
    $login = false;
    $esadmin = false;
}



?>
   
</html>



