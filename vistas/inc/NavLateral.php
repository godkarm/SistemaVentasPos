<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle show-nav-lateral"></i>
            <img src="<?php echo SERVERURL; ?>vistas/assets/avatar/<?php echo $_SESSION['foto_svi']; ?>" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
            <?php echo $_SESSION['nombre_svi']; ?><br><small class="roboto-condensed-light"><?php echo $_SESSION['cargo_svi']; ?></small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <?php echo $lc->enrutador("dashboard","inactivo",0); ?>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-briefcase fa-fw"></i> &nbsp; Administración <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                            <li> <?php echo $lc->enrutador("caja_new","inactivo",0); ?> </li>
                            <li> <?php echo $lc->enrutador("categoria_new","inactivo",0); ?> </li>
                            <li> <?php echo $lc->enrutador("proveedor_new","inactivo",0); ?> </li>
                            <li> <?php echo $lc->enrutador("usuario_new","inactivo",0); ?> </li>
                        <?php } ?>
                        <li> <?php echo $lc->enrutador("cliente_new","inactivo",0); ?> </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-boxes fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                            <li> <?php echo $lc->enrutador("producto_new","inactivo",0); ?> </li>
                        <?php } ?>
                        <li> <?php echo $lc->enrutador("producto_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_sold","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("categoria_producto","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_expiration","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_minimum_stock","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("producto_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                
                <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-shopping-basket fa-fw"></i> &nbsp; Compras <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("compra_new","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("compra_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("compra_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                <?php } ?>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Ventas <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("venta_new","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("venta_wholesale","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("venta_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("venta_pending","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("venta_search_date","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("venta_search_code","inactivo",0); ?> </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-wallet fa-fw"></i> &nbsp; Movimientos en cajas <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("movimiento_new","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("movimiento_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("movimiento_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                
                <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-truck-loading fa-fw"></i> &nbsp; Devoluciones <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("devolucion_list","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("devolucion_search","inactivo",0); ?> </li>
                    </ul>
                </li>
                <?php } ?>
                
                <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-warehouse fa-fw"></i> &nbsp; Kardex <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("kardex_general","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("kardex_search","inactivo",0); ?> </li>
                        <li> <?php echo $lc->enrutador("kardex_product","inactivo",0); ?> </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="far fa-file-pdf fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li> <?php echo $lc->enrutador("reporte_sale","inactivo",0); ?> </li>
                    </ul>
                </li>
                <?php } ?>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-cogs fa-fw"></i> &nbsp; Configuraciones <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_svi']=="Administrador"){ ?>
                            <li> <?php echo $lc->enrutador("empresa_new","inactivo",0); ?> </li>
                        <?php } ?>
                        <li>
                            <?php echo $lc->enrutador("usuario_update","parametro",$lc->encryption($_SESSION['id_svi'])); ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</section>