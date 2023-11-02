<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("producto_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_producto.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <?php
            if($_SESSION['cargo_svi']=="Administrador"){
                echo '<li>'.$lc->enrutador("producto_new","inactivo",0).'</li>';
            }
        ?>
        <li><?php echo $lc->enrutador("producto_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_sold","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("categoria_producto","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_expiration","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_minimum_stock","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid" style="background-color: #FFF; padding-bottom: 20px;">
    <?php
        require_once "./controladores/productoControlador.php";
        $ins_producto = new productoControlador();

        echo $ins_producto->paginador_producto_controlador($pagina[1],15,$pagina[0],"",$_SESSION['cargo_svi']);
    ?>
</div>