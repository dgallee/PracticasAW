


    $(document).ready(function(){
        
         $("#correoOK").hide();
         $("#userOK").hide();
         $("#correoMal").hide();
         $("#userMal").hide();
        
         $("#campoEmail").change(function(){
            const campo = $("#campoEmail"); // referencia jquery al campo
            campo[0].setCustomValidity(""); // limpia validaciones previas
            // validación html5, porque el campo es <input type="email" ...>
            const esCorreoValido = campo[0].checkValidity();
            if (esCorreoValido && correoValidoComplu(campo.val())) { // El correo esválido y acaba por @ucm.es: marcamos y limpiamos quejas
                // Tu código aquí: coloca la marca correcta
                $("#correoMal").hide();
                $("#correoOK").show();
                $("#correoVacio").hide();
                campo[0].setCustomValidity("");
            } else { // Correo invalido: ponemos una marca y nos quejamos
                // Tu código aquí: coloca la marca correcta
                if (campo.val() == "") { // Correo vacío
                $("#correoMal").hide();
                $("#correoVacio").show();
                }
            else { // Correo inválido
                $("#correoMal").show();
                $("#correoVacio").hide();
            }
            $("#correoOK").hide();
            campo[0].setCustomValidity("El correo debe ser válido y acabar por @ucm.es");
         }
         });
        
        
         $("#campoUser").change(function(){
            var url = "comprobarUsuario.php?user=" + $("#campoUser").val();
            $.get(url,usuarioExiste);
         });
        
        
         function correoValidoComplu(correo) {
         // Tu codigo aqui (devuelve true ó false)
            return correo.substring(correo.indexOf('@')) === "@ucm.es";
         }
        })