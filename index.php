<?php 
    include 'templates/header.php';
?>
<div >
    <div id="login">
        <div class="contenedor-login">
            <div> 
                <div class="encabezado-formulario">
                    INICIAR SESIÓN
                </div>
                <div class="col-md-12 formulario">
                    <form action="includes/back/login.php"  method="post">
                        <div class="col-md-12">
                         <?php
                        if(isset($_GET['datos']) and $_GET['datos']=='datos_incorrectos'):?>
                                <span>Error al ingresar</span>
                        <?php endif; ?>
                        </div>
                        <div class="col-md-12">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" name="correo" placeholder="Correo" required>
                        </div>

                        <div class="col-md-12">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">INGRESAR</button>

                        </div>
                    </form>
                </div>

                <div class="footer-formulario">
                    <div>
                        <a href="registro.php"><button class="btn btn-primary" type="submit"> REGISTRO</button></a>
                        <div>
                            <p>¿Olvidó su contraseña?</p>
                            <a href="">Cambiar contraseña</a>
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