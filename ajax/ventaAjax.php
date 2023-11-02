<?php
    $peticion_ajax=true;
    require_once "../config/APP.php";

	if(isset($_POST['producto_codigo_add']) || isset($_POST['producto_codigo_del']) || isset($_POST['producto_codigo_up']) || isset($_POST['buscar_cliente']) || isset($_POST['cliente_id_add']) || isset($_POST['cliente_id_del']) || isset($_POST['buscar_codigo']) || isset($_POST['venta_descuento_add']) || isset($_POST['venta_descuento_del']) || isset($_POST['venta_tipo_venta_reg']) || isset($_POST['pago_codigo_reg']) || isset($_POST['venta_codigo_del'])){

		/*--------- Instancia al controlador ---------*/
		require_once "../controladores/ventaControlador.php";
        $ins_venta = new ventaControlador();
        
		/*--------- Agregar producto a carrito ---------*/
		if(isset($_POST['producto_codigo_add'])){
			echo $ins_venta->agregar_producto_carrito_controlador();
        }
        
        /*--------- Eliminar producto a carrito ---------*/
		if(isset($_POST['producto_codigo_del'])){
			echo $ins_venta->eliminar_producto_carrito_controlador();
		}

		/*--------- Actualizar producto a carrito ---------*/
		if(isset($_POST['producto_codigo_up'])){
			echo $ins_venta->Actualizar_producto_carrito_controlador();
		}

		/*--------- Buscar cliente ---------*/
		if(isset($_POST['buscar_cliente'])){
			echo $ins_venta->buscar_cliente_venta_controlador();
		}

		/*--------- Agregar cliente a carrito ---------*/
		if(isset($_POST['cliente_id_add'])){
			echo $ins_venta->agregar_cliente_venta_controlador();
		}

		/*--------- Eliminar cliente de carrito ---------*/
		if(isset($_POST['cliente_id_del'])){
			echo $ins_venta->eliminar_cliente_venta_controlador();
		}

		/*--------- Aplicar descuento ---------*/
		if(isset($_POST['venta_descuento_add'])){
			echo $ins_venta->aplicar_descuento_venta_controlador();
		}

		/*--------- Buscar codigo ---------*/
		if(isset($_POST['buscar_codigo'])){
			echo $ins_venta->buscar_codigo_venta_controlador();
		}

		/*--------- Remover descuento ---------*/
		if(isset($_POST['venta_descuento_del'])){
			echo $ins_venta->remover_descuento_venta_controlador();
		}

		/*--------- Registrar venta ---------*/
		if(isset($_POST['venta_tipo_venta_reg'])){
			echo $ins_venta->registrar_venta_controlador();
		}

		/*--------- Registrar pago de venta---------*/
		if(isset($_POST['pago_codigo_reg'])){
			echo $ins_venta->agregar_pago_venta_controlador();
		}

		/*--------- Eliminar venta---------*/
		if(isset($_POST['venta_codigo_del'])){
			echo $ins_venta->eliminar_venta_controlador();
		}
	}else{
		session_start(['name'=>'SVI']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}