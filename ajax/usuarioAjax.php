<?php
    $peticion_ajax=true;
    require_once "../config/APP.php";

	if(isset($_POST['usuario_tipo_documento_reg']) || isset($_POST['usuario_id_up']) || isset($_POST['usuario_id_del'])){

		/*--------- Instancia al controlador ---------*/
		require_once "../controladores/usuarioControlador.php";
        $ins_usuario = new usuarioControlador();

        /*--------- Agregar usuario ---------*/
        if(isset($_POST['usuario_tipo_documento_reg'])){
            echo $ins_usuario->agregar_usuario_controlador();
		}
		
		/*--------- Actualizar usuario ---------*/
        if(isset($_POST['usuario_id_up'])){
            echo $ins_usuario->actualizar_usuario_controlador();
		}
		
		/*--------- Eliminar usuario ---------*/
        if(isset($_POST['usuario_id_del'])){
            echo $ins_usuario->eliminar_usuario_controlador();
        }
        
	}else{
		session_start(['name'=>'SVI']);
		session_unset();
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}