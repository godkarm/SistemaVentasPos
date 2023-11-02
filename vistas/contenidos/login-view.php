<!-- AdminLTE Skins -->
<link rel="stylesheet" href="<?php echo SERVERURL; ?>/vistas/css/login.css">
<div class="login-container"></div>
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Bienvenido!</h1>
      <p class="modal-desc">Sistema almacén con notificaciones de productos con vencimiento.</p>
      <form method="POST" autocomplete="off">
        <div class="form-group">
        <label for="UserName" class="bmd-label-floating icon-brown"><i class="fas fa-user-secret icon-brown"></i> &nbsp; Usuario:</label>
        <input type="text" class="form-control" id="UserName" name="usuario_log" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required="" onkeyup="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
      </div>
        <label for="password" class="bmd-label-floating icon-brown"><i class="fas fa-key icon-brown"></i> &nbsp; Password:</label>
        <div class="input-group">
        <input type="password" class="form-control" id="UserPassword" name="clave_log" pattern="[a-zA-Z0-9$@!&.-]{1,100}" maxlength="100" required="" onkeypress="capLock(event)">
        <div class="input-group-append">
                <button id="show_password" class="input-eye" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
                </div>
      </div>
      <div id="divMayus" style="visibility:hidden"><span class='capsWarn error' style='display:inline;'>Bloq Mayús activado <i style='color: orange;' class='fas fa-exclamation-triangle'></i></span>
                </div>
      <div class="modal-buttons">
        <a href="" class=""></a>
        <button type="submit" class="input-button">Iniciar sesión</button>
        </form>
      </div>
      <p class="sign-up">&#169; Ghio Systems <a href="https://www.facebook.com/Ghio-Systems-620369865272709/?ref=page_internal"><i class="fab fa-facebook-square"></i></a></p>
    </div>
    <div class="modal-right">
      <img src="<?php echo SERVERURL; ?>/vistas/assets/img/bodega.jpg" alt="">
    </div>
  </div>
  <button class="modal-button">Cargando...<i class="fas fa-spinner fa-pulse"></i></button>
</div>

  <script  src="<?php echo SERVERURL; ?>/vistas/js/script.js"></script>
<?php
    if(isset($_POST['usuario_log']) && isset($_POST['clave_log'])){
        require_once "./controladores/loginControlador.php";
        $ins_login= new loginControlador();
        echo $ins_login->iniciar_sesion_controlador();
    }
?>
<script type="text/javascript">
   function capLock(e){
 kc = e.keyCode?e.keyCode:e.which;
 sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  document.getElementById('divMayus').style.visibility = 'visible';
 else
   document.getElementById('divMayus').style.visibility = 'hidden';
}
function mostrarPassword(){
        var cambio = document.getElementById("UserPassword");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
    $(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});
</script>