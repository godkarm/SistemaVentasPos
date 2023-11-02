<?php
    include "./vistas/inc/admin_security.php";
?>

<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("producto_image","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_producto.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("producto_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_list","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_sold","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("categoria_producto","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_expiration","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_minimum_stock","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("producto_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        include "./vistas/inc/btn_go_back.php";

        $datos_producto=$lc->datos_tabla("Unico","producto","producto_id",$pagina[1]);

        if($datos_producto->rowCount()==1){
            $campos=$datos_producto->fetch();
    ?>
    <div class="form-neon">
        <h3 class="text-center text-info"><?php echo $campos['producto_nombre']; ?></h3>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php if(is_file("./vistas/assets/product/".$campos['producto_foto'])){ ?>
                        <form class="FormularioAjax" action="<?php echo SERVERURL; ?>ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off" >
                            <input type="hidden" name="producto_img_id_del" value="<?php echo $pagina[1]; ?>">
                            <figure>
                                <img class="img-fluid img-product-info" src="<?php echo SERVERURL; ?>vistas/assets/product/<?php echo $campos['producto_foto']; ?>" alt="<?php echo $campos['producto_nombre']; ?>">
                            </figure>
                            <p class="text-center" style="margin-top: 40px;">
                                <button type="submit" class="btn btn-raised btn-danger btn-sm">
                                <i class="far fa-trash-alt"></i> &nbsp; ELIMINAR IMAGEN</button>
                            </p>
                        </form>
                    <?php }else{ ?>
                        <figure>
                            <img class="img-fluid img-product-info" src="<?php echo SERVERURL; ?>vistas/assets/img/producto.png" alt="<?php echo $campos['producto_nombre']; ?>">
                        </figure>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-6">
                    <form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/productoAjax.php" method="POST" data-form="update" autocomplete="off" enctype="multipart/form-data" >
                        <input type="hidden" name="producto_img_id_up" value="<?php echo $pagina[1]; ?>">
                        <fieldset>
                            <legend><i class="far fa-image"></i> &nbsp; Actualizar foto o imagen del producto</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg">
                                            <small class="text-muted">Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB. Resolución recomendada 300px X 300px o superior manteniendo el aspecto cuadrado (1:1)</small>
                                        </div>
                                        <p class="text-center" style="margin-top: 40px;">
                                            <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync"></i> &nbsp; ACTUALIZAR IMAGEN</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }else{
            include "./vistas/inc/error_alert.php";
        } 
    ?>
</div>