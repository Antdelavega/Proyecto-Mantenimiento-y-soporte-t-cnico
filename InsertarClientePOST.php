<?php 
$URL = "https://localhost:44332/api/Clientes/Post";

$data=array('Id'=>'22','Nombre'=>'Prueba','Apellidos'=>'Hecho','Nit'=>'55555','Direccion'=>'Cerinal','Telefono'=>'55554545');
$data_string=json_encode($data);
$ch=curl_init($URL);


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt(
	$ch,
     CURLOPT_HTTPHEADER,
    array(
 	'Content-Type: application/json',
 	'Content-Lenght: '.strlen($data_string)
 	)
 );

curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
print_r($result);
 ?>

 <a href="Generar.php">
	<button style="font-size:24px" aling="right" class="btn btn-danger">PDF. <i class="fa fa-file-pdf-o" style="font-size:35px;color:white"></i></button>
</a>