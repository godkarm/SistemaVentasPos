<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("movimiento_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_movimiento.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("movimiento_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("movimiento_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("movimiento_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/movimientoControlador.php";
        $ins_movimiento = new movimientoControlador();

        echo $ins_movimiento->paginador_movimiento_controlador($pagina[1],15,$pagina[0],"Listado","","");
    ?>
</div>