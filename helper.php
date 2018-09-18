<?php
function mostrar_tabla($listado){
	if(count($listado) == 0){
		?><p>No hay empleados</p><?php
		return;
	}
	$i = 0;
	?>
	<table border=1 style="text-align: center;">
		<thead>
	<?php
	mostrar_header($listado[0]);
	?>
		<thead>
		<tbody>
	<?php
	mostrar_datos($listado);
	?>
		</tbody>
	</table>
	<?php
}

function mostrar_header($emp){
	foreach($emp as $k=>$v){
		?><th><?= strtoupper($k) ?></th><?php
	}
}

function mostrar_datos($listado){
	foreach($listado as $emp){
		?>
		<tr>
		<?php
		foreach($emp as $v){
			?><td><?= $v ?></td><?php
		}
		?>
		</tr>
		<?php
	}
}