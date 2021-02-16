<?php
		//este es el correo al que llegarán los mails
		$destino= "hideonbush1599@gmail.com";
		$destino2= "nikolaymx@yahoo.com";



		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$nombre = $_POST["nombre-blue-service"];
		$razon_social = $_POST["razon-social-blue-service"];
		$correo = $_POST["correo-blue-service"];
		$telefono = $_POST["telefono-blue-service"];
		$estado = $_POST["estado-blue-service"];
		$servicio = $_POST["servicio-blue-service"];
		$mensaje = $_POST["mensaje-blue-service"];
		$contenido = "Enviado desde el cotizador de CEGTA" . "\n" . "Nombre del Cliente: " . $nombre . "\n" . "Razón social del cliente: " . $razon_social .  "\n" . "Correo: " . $correo . "\n" . "Telefono: " . $telefono .  "\n" . "Estado: " . $estado .  "\n" . "Servicio: " . $servicio .  "\n" . "Mensaje: " . $mensaje . "\n" . "Fin del mensaje";
		
		
		
		mail($destino,"Nueva Cotización para Blue Service",$contenido);
		mail($destino2,"Nueva Cotización para Blue Service",$contenido);

		
		header("Location:index.html");
?>