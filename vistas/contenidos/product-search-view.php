<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("producto_search","encabezado",0); ?>
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
        <li><?php echo $lc->enrutador("producto_list","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_sold","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("categoria_producto","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_expiration","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_minimum_stock","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_search","activo",0); ?></li>
    </ul>	
</div>
<?php
	if(!isset($_SESSION['busqueda_producto']) && empty($_SESSION['busqueda_producto'])){
?>
<div class="container-fluid">
    <form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/buscadorAjax.php" data-form="default" method="POST" autocomplete="off" >
        <input type="hidden" name="modulo" value="producto">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="inputSearch" class="bmd-label-floating">¿Qué producto estas buscando?</label>
                        <input type="text" class="form-control" name="busqueda_inicial" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" id="inputSearch" maxlength="30">
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }else{ ?>
<div class="container-fluid">
    <form class="FormularioAjax" action="<?php echo SERVERURL; ?>ajax/buscadorAjax.php" data-form="search" method="POST" autocomplete="off">
        <input type="hidden" name="modulo" value="producto">
        <input type="hidden" name="eliminar_busqueda" value="eliminar">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6">
                    <p class="text-center" style="font-size: 20px;">
                    Resultados de la busqueda <strong>“<?php echo $_SESSION['busqueda_producto']; ?>”</strong>
                    </p>
                </div>
                <div class="col-12">
                    <p class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container-fluid" style="background-color: #FFF; padding-bottom: 20px;">
    <?php
        require_once "./controladores/productoControlador.php";
        $ins_producto = new productoControlador();

        echo $ins_producto->paginador_producto_controlador($pagina[1],15,$pagina[0],$_SESSION['busqueda_producto'],$_SESSION['cargo_svi']);
    ?>
</div>
<?php } ?>