<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <?php echo $lc->enrutador("cliente_list","encabezado",0); ?>
    </h3>
    <?php include "./vistas/desc/desc_cliente.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li><?php echo $lc->enrutador("cliente_new","inactivo",0); ?></li>
        <li><?php echo $lc->enrutador("cliente_list","activo",0); ?></li>
        <li><?php echo $lc->enrutador("cliente_search","inactivo",0); ?></li>
    </ul>	
</div>

<div class="container-fluid">
    <?php
        require_once "./controladores/clienteControlador.php";
        $ins_cliente = new clienteControlador();

        echo $ins_cliente->paginador_cliente_controlador($pagina[1],15,$pagina[0],"");
    ?>
</div>