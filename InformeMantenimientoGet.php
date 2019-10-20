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

	$URL = "https://localhost:44332/api/InformeMantenimiento";

	$ch =curl_init();
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
	print_r($json);

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


<h5 class="col-xs-2 col-md-8 col-lg-13 display-1 text-center py-5 container"><center>Informe Mantenimiento</center></h5>
<div style="text-align: right;width:1900px">
 <a href="Generar.php">
	<button style="font-size:24px" aling="right" class="btn btn-danger">PDF. <i class="fa fa-file-pdf-o" style="font-size:35px;color:white"></i></button>
</a>
</div>
<div class="col-xs-2 col-md-12 col-lg-13 display-5 text-center  container"  >
<table class="table table-bordered"  >
<thead align="center">
	<tr >
			<th>Id</th>
			<th>Fecha Entrega</th>
			<th>Fecha de Salida</th>
			<th>Prioridad</th>
			<th>Total</th>
			<th>Tipo de mantenimiento</th>
			<th>Activo Fijo ID</th>
			<th>Personal Mantenimiento ID</th>
			<th>Actividades Mantenimiento ID</th>
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
            <td> <?php echo $character->fechaEntrega; ?> </td>
            <td> <?php echo $character->fechaSalida; ?> </td>
            <td> <?php echo $character->prioridad; ?> </td>
            <td> <?php echo $character->total; ?> </td>
            <td> <?php echo $character->tipoMantenimiento; ?> </td>
            <td> <?php echo $character->activosFijosId; ?> </td>
            <td> <?php echo $character->personalMantenimientoId; ?> </td>
            <td> <?php echo $character->actividadesMantenimientoId; ?> </td>
            <td>
	<a href="InsertarClientePOST.php"><i class="fas fa-file-alt"></i>
	</a>
	
	</td>
		<td>
	<a href="edit.php?no_afiliacion=<?php echo $row['no_afiliacion']?>" class="btn btn-secondary">
	<i class="fas fa-user-edit"></i>
	</a>
	</td>
	<td>
	<a href="delete_task.php?no_afiliacion=<?php echo $row['no_afiliacion']?>" class="btn btn-danger">
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

