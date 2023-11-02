<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("devolucion_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_devolucion.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("devolucion_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("devolucion_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/devolucionControlador.php";
        $ins_devolucion = new devolucionControlador();

        echo $ins_devolucion->paginador_devolucion_controlador($pagina[1],15,$pagina[0],"","");
    ?>
</div>