<?php 


request_curl();
function request_curl(){

//Peticion GET

$URL = "https://localhost:44332/api/Clientes";  //URL a utilizar
$conexion = curl_init();   //Creacion conexion


//Asignar parametros para el tipo de peticion
//URL + Opcion + valor


curl_setopt($conexion, CURLOPT_URL, $URL);
curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type:  application/json'));
//Certificado

curl_setopt($conexion, CURLOPT_RETURNTRANSFER,1);  //
//Autentificar
curl_setopt($conexion,CURLOPT_USERPWD, "usuario:pass");


//CURL GEt
$respuesta=curl_exec($conexion);

curl_close($conexion); //Cerrar



}

//Post
function request_post(){
	$URL = "https://localhost:44332/api/Clientes";
    $envio = "Clientes";
	$conexion=curl_init();

	curl_setopt($conexion, CURLOPT_URL, $URL);	
	curl_setopt($conexion, CURLOPT_HTTPGET, false); //no es get, false
	curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type:  application/json','Content-Length: '.strlen($envio)));
    curl_setopt($conexion, CURLOPT_POST, 1);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
    curl_setopt($conexion, CURLOPT_HEADER, FALSE);
//Certificado
	curl_setopt($conexion, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSV1_2);
	curl_setopt($conexion, CURLOPT_RETURNTRANSFER,1);  //
//Autentificar
	curl_setopt($conexion,CURLOPT_USERPWD, "usuario:pass");

$respuesta=curl_exec($conexion);
	if($respuesta === false){

	}

	curl_close($conexion);

}


//PUT

function request_put(){
	$URL = "https://localhost:44332/api/";
	$envio = "prueba";
	$conexion=curl_init();
	curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($conexion, CURLOPT_URL, $URL);
	curl_setopt($conexion, CURLOPT_HTTPGET, FALSE); //no es get, false
	curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type:  application/json','Content-Length: '.strlen($envio)));
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
    curl_setopt($conexion, CURLOPT_HEADER, FALSE);
//Certificado
	curl_setopt($conexion, CURLOPT_SSLVERSION,CURL_SSLVERSION_TLSV1_2);
	curl_setopt($conexion, CURLOPT_RETURNTRANSFER,1);  //
//Autentificar
	curl_setopt($conexion,CURLOPT_USERPWD, "usuario:pass");
	$respuesta=curl_exec($conexion);

	if($respuesta === false){

	}

	curl_close($conexion);

}


//Delete

function request_delete(){
	$URL = "https://localhost:44332/api/";
	$envio = "prueba";
	$conexion=curl_init();
	curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($conexion, CURLOPT_URL, $URL);
	curl_setopt($conexion, CURLOPT_HTTPGET, FALSE); //no es get, false
	curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type:  application/json'));
//Certificado
	curl_setopt($conexion, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSV1_2);
	curl_setopt($conexion, CURLOPT_RETURNTRANSFER,1);  //
//Autentificar
	curl_setopt($conexion,CURLOPT_USERPWD, "usuario:pass");

$respuesta=curl_exec($conexion);
	if($respuesta === false){

	}

	curl_close($conexion);

}

//PATCH

function request_patch(){
	$URL = "https://localhost:44332/api/";
	$envio = "prueba";
	$conexion=curl_init();
	curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "PATCH");
	curl_setopt($conexion, CURLOPT_URL, $URL);
	curl_setopt($conexion, CURLOPT_HTTPGET, FALSE); //no es get, false
	curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type:  application/json','Content-Length: '.strlen($envio)));
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
    curl_setopt($conexion, CURLOPT_HEADER, FALSE);
//Certificado
	curl_setopt($conexion, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSV1_2);
	curl_setopt($conexion, CURLOPT_RETURNTRANSFER,1);  //
//Autentificar
	curl_setopt($conexion,CURLOPT_USERPWD, "usuario:pass");
$respuesta=curl_exec($conexion);
	if($respuesta === false){

	}

	curl_close($conexion);

}



 ?>