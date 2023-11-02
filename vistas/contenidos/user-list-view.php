<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("usuario_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_usuario.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("usuario_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("usuario_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("usuario_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/usuarioControlador.php";
        $ins_usuario = new usuarioControlador();

        echo $ins_usuario->paginador_usuario_controlador($pagina[1],15,$pagina[0],"",$_SESSION['id_svi']);
    ?>
</div>