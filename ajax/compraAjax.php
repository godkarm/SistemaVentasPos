<?php
    $peticion_ajax=true;
    require_once "../config/APP.php";

	if(isset($_POST['producto_codigo_kart']) || isset($_POST['producto_tipo_add']) || isset($_POST['producto_codigo_del']) || isset($_POST['compra_fecha_reg'])){

		/*--------- Instancia al controlador ---------*/
		require_once "../controladores/compraControlador.php";
        $ins_compra = new compraControlador();
        
        /*--------- Agregar producto a compra ---------*/
        if(isset($_POST['producto_codigo_kart'])){
            echo $ins_compra->agregar_producto_compra_controlador();
		}

		/*--------- Agregar producto a carrito ---------*/
		if(isset($_POST['producto_tipo_add'])){
			echo $ins_compra->agregar_producto_carrito_controlador();
		}

		/*--------- Eliminar producto de carrito ---------*/
		if(isset($_POST['producto_codigo_del'])){
			echo $ins_compra->eliminar_producto_carrito_controlador();
		}

		/*--------- Agregar compra ---------*/
		if(isset($_POST['compra_fecha_reg'])){
			echo $ins_compra->agregar_compra_controlador();
		}
	}else{
		session_start(['name'=>'SVI']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}