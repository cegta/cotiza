<?php
		//este es el correo al que llegarán los mails
		$destino= "hideonbush1599@gmail.com";
		$destino2= "nikolaymx@yahoo.com";



		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$nombre = $_POST["nombre-cegta"];
		$razon_social = $_POST["razon-social-cegta"];
		$correo = $_POST["correo-cegta"];
		$telefono = $_POST["telefono-cegta"];
		$estado = $_POST["estado-cegta"];
		$municipio = $_POST["municipio-cegta"];
		$tramite = $_POST["tramite-cegta"];
		$curso = $_POST["curso-cegta"];
		$mensaje = $_POST["mensaje-cegta"];
		$contenido = "Enviado desde el cotizador de CEGTA" . "\n" . "Nombre del Cliente: " . $nombre . "\n" . "Razón social del cliente: " . $razon_social .  "\n" . "Correo: " . $correo . "\n" . "Telefono: " . $telefono .  "\n" . "Estado: " . $estado .  "\n" . "Municipio: " . $municipio .  "\n" . "Tramite: " . $tramite .  "\n" . "Curso: " . $curso .  "\n" . "Mensaje: " . $mensaje . "\n" . "Fin del mensaje";
		
		
		
		mail($destino,"Nueva Cotización para CEGTA",$contenido);
		mail($destino2,"Nueva Cotización para CEGTA",$contenido);

		
		header("Location:index.html");
?>