<?php
		//este es el correo al que llegarán los mails
		$destino= "hideonbush1599@gmail.com";
		$destino2= "nikolaymx@yahoo.com";



		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$nombre = $_POST["nombre-ingenieria"];
		$razon_social = $_POST["razon-social-ingenieria"];
		$correo = $_POST["correo-ingenieria"];
		$telefono = $_POST["telefono-ingenieria"];
		$estado = $_POST["estado-ingenieria"];
		$municipio = $_POST["municipio-ingenieria"];
		$servicio = $_POST["servicio-ingenieria"];
		$mensaje = $_POST["mensaje-ingenieria"];
		$contenido = "Enviado desde el cotizador de CEGTA" . "\n" . "Nombre del Cliente: " . $nombre . "\n" . "Razón social del cliente: " . $razon_social .  "\n" . "Correo: " . $correo . "\n" . "Telefono: " . $telefono .  "\n" . "Estado: " . $estado .  "\n" . "Municipio: " . $municipio .  "\n" . "Servicio: " . $servicio .  "\n" . "Mensaje: " . $mensaje . "\n" . "Fin del mensaje";
		
		
		
		mail($destino,"Nueva Cotización para Ingeniería Ambiental Integral",$contenido);
		mail($destino2,"Nueva Cotización para Ingeniería Ambiental Integral",$contenido);

		
		header("Location:index.html");
?>