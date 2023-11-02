<?php
    $peticion_ajax=true;
    require_once "../config/APP.php";

	if(isset($_POST['proveedor_nombre_reg']) || isset($_POST['proveedor_id_up']) || isset($_POST['proveedor_id_del'])){

		/*--------- Instancia al controlador ---------*/
		require_once "../controladores/proveedorControlador.php";
		$ins_proveedor = new proveedorControlador();
		
		/*--------- Agregar proveedor ---------*/
		if(isset($_POST['proveedor_nombre_reg'])){
			echo $ins_proveedor->agregar_proveedor_controlador();
		}

		/*--------- Actualizar proveedor ---------*/
		if(isset($_POST['proveedor_id_up'])){
			echo $ins_proveedor->actualizar_proveedor_controlador();
		}

		/*--------- Eliminar proveedor ---------*/
		if(isset($_POST['proveedor_id_del'])){
			echo $ins_proveedor->eliminar_proveedor_controlador();
		}
        
	}else{
		session_start(['name'=>'SVI']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}