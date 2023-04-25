<?php
require_once 'includes/config.php';
require_once 'includes/vistas/helpers/formRegistro.php';


$tituloPagina = 'Register';
$htmlFormRegister = buildFormularioRegister();
$contenidoPrincipal=<<<EOS
<h1>Register</h1>
$htmlFormRegister
EOS;

require 'includes/vistas/comun/layout.php';