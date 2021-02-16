<?php
		//este es el correo al que llegarán los mails
		$destino= "hideonbush1599@gmail.com";
		$destino2= "nikolaymx@yahoo.com";



		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$nombre = $_POST["nombre-insima"];
		$razon_social = $_POST["razon-social-insima"];
		$correo = $_POST["correo-insima"];
		$telefono = $_POST["telefono-insima"];
		$estado = $_POST["estado-insima"];
        $municipio = $_POST["municipio-insima"];
        $estudios_trabajo = $_POST["estudios-trabajo-insima"];
        $estudios_higiene = $_POST["estudios-higiene-insima"];
        $curso = $_POST["capacitacion-insima"];
        $proteccion_civil = $_POST["pc-insima"];
        $servicios_asea = $_POST["servicios-asea-insima"];
        $adicionales = $_POST["adicionales-insima"];
		$mensaje = $_POST["mensaje-insima"];
		$contenido = "Enviado desde el cotizador de CEGTA" . "\n" . "Nombre del Cliente: " . $nombre . "\n" . "Razón social del cliente: " . $razon_social .  "\n" . "Correo: " . $correo . "\n" . "Telefono: " . $telefono .  "\n" . "Estado: " . $estado .  "\n" . "Municipio: " . $municipio .  "\n" . "Estudios y análisis de riesgo de trabajo: " . $estudios_trabajo .  "\n" . "Estudios de higiene y ambiente laboral: " . $estudios_higiene . "\n" . "Curso de capacitación: " . $curso . "\n" . "Servicios de protección civil: " . $proteccion_civil . "\n" . "Servicios para cumplimiento ante ASEA: " . $servicios_asea . "\n" . "Servicios Adicionales: " . $adicionales . "\n" . "Mensaje: " . $mensaje . "\n" . "Fin del mensaje";
		
		
		
		mail($destino,"Nueva Cotización para INSIMA",$contenido);
		mail($destino2,"Nueva Cotización para INSIMA",$contenido);

		
		header("Location:index.html");
?>