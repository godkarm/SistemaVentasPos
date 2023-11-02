<?php
    $peticion_ajax=true;
    require_once "../config/APP.php";

	if(isset($_POST['producto_codigo_kardex'])){

		/*--------- Instancia al controlador ---------*/
		require_once "../controladores/kardexControlador.php";
        $ins_kardex = new kardexControlador();

        /*--------- Buscar kardex de producto ---------*/
        if(isset($_POST['producto_codigo_kardex'])){
            echo $ins_kardex->buscar_kardex_producto_controlador();
		}

	}else{
		session_start(['name'=>'SVI']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}