<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("kardex_general","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_kardex.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("kardex_general","activo",0); ?></li>
        <li><?php echo $lc->enrutador("kardex_search","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("kardex_product","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/kardexControlador.php";
        $ins_kardex = new kardexControlador();

        echo $ins_kardex->paginador_kardex_controlador($pagina[1],15,$pagina[0],"","");
    ?>
</div>