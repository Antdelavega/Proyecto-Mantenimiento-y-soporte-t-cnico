<script language="JavaScript1.2">
<!--
window.moveTo(0,0);
if (document.all) {
top.window.resizeTo(screen.availWidth,screen.availHeight);
}
else if (document.layers||document.getElementById) {
if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){
top.window.outerHeight = screen.availHeight;
top.window.outerWidth = screen.availWidth;
}
}
//-->
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include ("includes/header.php") ?>
<!-- Select - Get -->
<?php 

	$URL = "https://localhost:44332/api/Clientes";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_HTTPGET, TRUE);//*
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type:  application/json'));//*
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$json=curl_exec($ch);
	if(!$json){
		echo curl_error($ch);
	}
curl_close($ch);
#	print_r($json);

stream_context_set_default([
'ssl' =>[
	'verify_peer' => false,
	'verify_peer_name' => false,
		]
	]);
echo "<pre>";
$character =json_decode($URL);
$data = file_get_contents($URL);
$characters = json_decode($data);
#echo $characters[0]->id;

   ?>


<h5 class="col-xs-2 col-md-8 col-lg-13 display-1 text-center py-5 container"><center>Clientes </center></h5>
<div style="text-align: right;width:1900px">
 <a href="CRUD/FormularioCliente.php">
	<button style="font-size:24px" aling="right" class="btn btn-danger">Agregar. <i class="fas fa-file-alt" style="font-size:35px;color:white"></i></button>
</a>
</div>
<div class="col-xs-2 col-md-12 col-lg-13 display-5 text-center  container"  >
<table class="table table-bordered"  >
<thead align="center">
	<tr >
			<th>Identicador</th>
			<th>NOMBRE</th>
			<th>Apellidos</th>
			<th>NIT</th>
			<th>DIRECCIÓN</th>
			<th>TELEFONO</th>
			<!-- <th>Activos fijos</th> -->
			<th>Agregar</th>
			<th>Editar</th>
			<th>Elimiar</th>
			<th>Reporte PDF</th>

	</tr>
</thead>
<tbody align="center">
<?php foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->id; ?> </td>
            <td> <?php echo $character->nombres; ?> </td>
            <td> <?php echo $character->apellidos; ?> </td>
            <td> <?php echo $character->nit; ?> </td>
            <td> <?php echo $character->direccion; ?> </td>
            <td> <?php echo $character->telefono; ?> </td>
            <!-- <td>?php# echo $character->activosFijos; ?> </td> -->
            <td>
	
	
	</td>
		<td>
	<a href="CRUD/ActualizarClientes.php?id=<?php echo $character->id;?>" class="btn btn-secondary">
	<i class="fas fa-user-edit"></i>
	</a>
	</td>
	<td>
	<a href="CRUD/Bajas/EliminarClienteDelete.php?id=<?php echo $character->id; ?>" class="btn btn-danger">
	<i class="fas fa-trash-alt"></i>
	</a>
	</td>
	<td>
	<a href="GenerarUnico.php?dpi=<?php echo $row['dpi']?>" class="btn btn-warning">
	<i class="far fa-file-pdf"></i>
	</td>
	 </tr>
		<?php endforeach; ?>






</div>
</tbody>
</table>


<?php include ("includes/footer.php") ?>

