<?php 
    include 'templates/header.php';
?>
<?php if (isset($_GET[ "registro"]) && $_GET[ "registro"] == 'ok'): ?>
  <script type="text/javascript">
        
      Swal.fire({
      icon: 'success',
      title: 'Registro ¡Exitoso!',
    
    })
  </script>
<?php endif; ?>
<div >
    <div id="login">
        <div class="contenedor-login">
            <div> 
                <div class="encabezado-formulario">
                    REGISTRO
                </div>
                <div class="col-md-12 formulario">
                    <form action="includes/back/registro_back.php" method="post">
                        <div class="col-md-12">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Institución de salud</label>
                            <input class="form-control" type="text" name="institucion" placeholder="Institución de salud" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" name="correo" id="correo"  placeholder="Correo" required>
                        </div>

                        <div class="col-md-12">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Repetir contraseña</label>
                            <div id="resultadoPassword"></div>
                            <input class="form-control" type="password" name="password_repetida" id="password_repetida" placeholder="Password" required>
                        </div>
                        <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">REGISTRARME </button>

                        </div>
                    </form>
                </div>

                <div class="footer-formulario">
                    <div>
                        <p>¿Y se encuentra registrado?</p>
                        <a href="index.php"><button class="btn btn-primary" type="submit">INICIAR SESIÓN</button></a>
                        <div>
                            <a href="">Recuperar contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="presentador">
            <div>
                <div>
                    <img src="img/presentador.png" alt="">
                </div>
                <div>
                    <p class="p-uno">Presentado por:</p>
                    <p class="p-dos">DR.Mauricio Ocqueteau T.</p>
                    <p class="p-tres">Hemato Oncólogo del Hospital <br>
                        de la Pontificia Universidad Cátolica</p>
                </div>
            </div>
        </div>

    </div>


</div>

<?php 
    include 'templates/footer.php';
?>