<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("venta_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_venta.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("venta_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("venta_wholesale","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("venta_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("venta_pending","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("venta_search_date","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("venta_search_code","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/ventaControlador.php";
        $ins_venta = new ventaControlador();

        echo $ins_venta->paginador_venta_controlador($pagina[1],15,$pagina[0],"","");
    ?>
</div>

<?php
	include "./vistas/inc/print_invoice_script.php";
?>