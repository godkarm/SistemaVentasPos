<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("compra_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_compra.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("compra_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("compra_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("compra_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/compraControlador.php";
        $ins_compra = new compraControlador();

        echo $ins_compra->paginador_compra_controlador($pagina[1],15,$pagina[0],"Listado","","");
    ?>
</div>