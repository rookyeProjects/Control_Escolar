<?php

class Notification { 

	public function registeredRecord($result) {
		if($result != false){
		  $mensaje = '<div class="alert alert-dismissible alert-success">
		              <button type="button" class="close" data-dismiss="alert">&times;</button>
		                Registrado correctamente.
		            </div>';         
		} else {
		  $mensaje = '<div class="alert alert-dismissible alert-warning">
		              <button type="button" class="close" data-dismiss="alert">&times;</button>
		                Inténtalo de nuevo.
		            </div>';                    
		}
		return utf8_encode( $mensaje);
	}   


    public function updatedRecord($result) {
    	if($result != false){
    	  $mensaje = '<div class="alert alert-dismissible alert-info">
    	              <button type="button" class="close" data-dismiss="alert">&times;</button>
    	                Cambios guardados correctamente.
    	            </div>';         
    	} else {
    	  $mensaje = '<div class="alert alert-dismissible alert-warning">
    	              <button type="button" class="close" data-dismiss="alert">&times;</button>
    	                Inténtalo de nuevo.
    	            </div>';                    
    	}
    	return utf8_encode( $mensaje);
    }

     public function deletedRecord($result){
       	if($result != false){
	        $mensaje = '<div class="alert alert-dismissible alert-success">
	                    <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Registro eliminado correctamente.
	                  </div>';         
     	 } else {
	        $mensaje = '<div class="alert alert-dismissible alert-warning">
	                    <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Inténtalo de nuevo.
	                  </div>';                    
      	}
      	return utf8_encode( $mensaje);
    }	
    
    public function existsUser(){
    	$mensaje = '<div class="alert alert-dismissible alert-danger">
    	            <button type="button" class="close" data-dismiss="alert">&times;</button>
    	            <strong>El usuario ya existe</strong> Elige otro e intentalo de nuevo.
    	          </div>';
    	return utf8_encode( $mensaje);
    }

    public function disableUser(){
    	$mensaje='<div class="alert alert-dismissible alert-info">
    	          <button type="button" class="close" data-dismiss="alert">&times;</button>
    	           La cuenta de usuario esta inhabilitada.</a>
    	        </div>';
    	return utf8_encode( $mensaje);
    }

    public function incorrectCredentials() {
		$mensaje='<div class="alert alert-dismissible alert-warning">
		    	   <button type="button" class="close" data-dismiss="alert">&times;</button>
		    	   Usuario y/o clave incorrectos, intentalo de nuevo.
		    	  </div>';
		return utf8_encode( $mensaje);
    }

    public function requiredFields() {
    	 $mensaje=' <div class="alert alert-dismissible alert-danger">
			    	 <button type="button" class="close" data-dismiss="alert">&times;</button>
			    	   Completa todos los campos e intentalo de nuevo.</p>
			    	</div>';
		return utf8_encode( $mensaje);
    }
}
?>