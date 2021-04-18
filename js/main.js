

$('#password_repetida').change(function(){
    validarPassword();
})

function validarPassword(){
    let password = $('#password').val();
    let passwordRepetida = $('#password_repetida').val();
    $('#resultadoPassword').empty();

    if( passwordRepetida != undefined ){

        if(password == passwordRepetida){
            $('#resultadoPassword').empty();
        }else{
            $('#resultadoPassword').append('<span>Las contraseñas no coinciden</span>');
            $('#password_repetida').val('');
        }

    }
}


$('#correo').change(function(){
    let correo = $('#correo').val();
    let datos = new FormData();
  
      datos.append('correo', correo);
      $.ajax({
        url: 'includes/back/validar_correo.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){

            console.log('r'+respuesta);
          if (respuesta==1) {
            Swal.fire({
              icon: 'error',
              title: '¡Correo ya existe!',
              text: 'El correo ya se encuentra registrado',
            })

            $('#correo').val('');

        }
        }
      })
    
  })

/*************************
    controladores  
*************************/ 

function reproducir(){
    document.getElementById("video").play();
    $('#pausar').show();
    $('#reproducir').hide();
    move();
}

function pausar(){
    document.getElementById("video").pause();
    $('#pausar').hide();
    $('#reproducir').show();
}

function reiniciar(){
    document.getElementById("video").load();
    $('#pausar').hide();
    $('#reproducir').show();
}

function mute(){
    $validar_sonido = document.getElementById("video").muted;
    //console.log(document.getElementById("video").muted);
    if($validar_sonido == true){
        document.getElementById("video").muted = false;
        $('#mute').hide();
        $('#volumen').show();

    }else{
        document.getElementById("video").muted = true;
        $('#mute').show();
        $('#volumen').hide();

    }
}
function adelantar(){
    document.getElementById("video").currentTime += 10;

}
function atrasar(){
    document.getElementById("video").currentTime -= 10;

}



/*************************
   end controladores  
*************************/ 