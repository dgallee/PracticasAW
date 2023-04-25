$("#email").change(function(){
    correoValido() ;
    const campo = $("#email"); // referencia jquery al campo
    campo[0].setCustomValidity(""); // limpia validaciones previas
    // validación html5, porque el campo es <input type="email" ...>
    const esCorreoValido = campo[0].checkValidity();
    if (esCorreoValido && correoValidoComplu(campo.val())) {
        // el correo es válido y acaba por @ucm.es
       
        campo.removeClass("icono-rojo");
       
        campo.addClass("icono-verde");
        // <-- aquí pongo la marca apropiada, y quito (si la hay) la otra
        // y lo marco como válido
        campo[0].setCustomValidity("");
    } else {

        campo.removeClass("icono-verde");
        campo.addClass("icono-rojo");
        // <-- aquí pongo la marca apropiada, y quito (si la hay) la otra
        // y pongo un mensaje como no-válido
        campo[0].setCustomValidity(
        "El correo debe ser válido y acabar por @ucm.es");
    }
   });

   function correoValidoComplu(correo) {
        const dominioComplu = "@ucm.es"; // Dominio de correo electrónico de la UCM
        const dominioCorreo = correo.slice(-dominioComplu.length); // Últimos caracteres del correo
        return dominioCorreo === dominioComplu;
    }

    function correoValido() {
        const campo = $("#email");
        campo[0].setCustomValidity("");
        campo.addClass("icono-rojo");
    }