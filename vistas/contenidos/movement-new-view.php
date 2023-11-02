<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("movimiento_new","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_movimiento.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("movimiento_new","activo",0); ?></li>
        <li><?php echo $lc->enrutador("movimiento_list","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("movimiento_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/movimientoAjax.php" method="POST" data-form="save" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-info-circle"></i> &nbsp; Información del movimiento</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="movimiento_tipo" class="bmd-label-floating">Caja <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <select class="form-control" name="movimiento_caja_reg">
                                <option value="" selected="" >Seleccione una opción</option>
                                <?php
                                    $datos_caja=$lc->datos_tabla("Normal","caja","*",0);

                                    while($campos_caja=$datos_caja->fetch()){
                                        echo '<option value="'.$campos_caja['caja_id'].'">Caja No.'.$campos_caja['caja_numero'].' ('.$campos_caja['caja_nombre'].' - '.MONEDA_SIMBOLO.$campos_caja['caja_efectivo'].' '.MONEDA_NOMBRE.')</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="movimiento_tipo" class="bmd-label-floating">Tipo de movimiento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <select class="form-control" name="movimiento_tipo_reg" id="movimiento_tipo">
                            <option value="" selected="" >Seleccione una opción</option>
                                <option value="Retiro de efectivo">Retiro de efectivo</option>
                                <option value="Entrada de efectivo">Entrada de efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="movimiento_cantidad" class="bmd-label-floating">Cantidad de efectivo <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="movimiento_cantidad_reg" value="0.00" id="movimiento_cantidad" maxlength="25">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="movimiento_motivo" class="bmd-label-floating">Motivo del movimiento <?php echo CAMPO_OBLIGATORIO; ?></label>
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{5,70}" class="form-control" name="movimiento_motivo_reg" id="movimiento_motivo" maxlength="70">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
        <p class="text-center">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
    </form>
</div>