<?php
//No se uso diseño para la clase, ya que la intención es sólo mostrar las funcionalidades pedidas, si se incluyeron algunas validaciones
//que deberían ser incluidas en el Front en lugar de aquí.

include('Empresa.php');
include('Empleado.php');
include('Programador.php');
include('Disenador.php');
include('helper.php');

echo '<h4>Creo una empresa vacía</h4>';

//Creo una empresa y dos empleados.
$empresa = new Empresa(1,'Summa',array());
echo $empresa->get_nombre() . '<br><br>';

//La validación de ser PHP, NET o Python la realizaría en un paso previo. Apenas llegan los datos del Front.
//Lo mismo con la validación del Tipo de Diseñador.
$programador = new Programador(1,'Bill','Gates',49,'PHP');
$disenador = new Disenador(2,'Ricky','Sarkany',53,'Web');

//Pruebo las funcionalidades sin empleados.
$listado = $empresa->get_listado_empleados();
echo 'listado empleados:';
mostrar_tabla($listado);
echo 'promedio edad: ' . $empresa->promedio_edad() . '<br>';
$emp = ($empresa->get_empleado(2));
if(is_object($emp) && get_parent_class($emp) == 'Empleado'){
	echo $emp->get_nombre();
} else {
	echo $emp . '<br><br>';
}

echo '<h4>Agrego un programador</h4>';

//Agrego el programador y pruebo las funcionalidades
$empresa->add_empleado($programador);

$listado = $empresa->get_listado_empleados();
echo 'listado empleados:';
mostrar_tabla($listado);
echo 'promedio edad: ' . $empresa->promedio_edad() . '<br>';
$emp = ($empresa->get_empleado(2));
if(is_object($emp) && get_parent_class($emp) == 'Empleado'){
	echo $emp->get_nombre();
} else {
	echo $emp . '<br><br>';
}

echo '<h4>Agrego un diseñador</h4>';

//Agrego el disenador y pruebo las funcionalidades
$empresa->add_empleado($disenador);

$listado = $empresa->get_listado_empleados();
echo 'listado empleados:';
mostrar_tabla($listado);
echo 'promedio edad: ' . $empresa->promedio_edad() . '<br>';
$emp = ($empresa->get_empleado(2));
if(is_object($emp) && get_parent_class($emp) == 'Empleado'){
	echo $emp->get_nombre();
}

echo '<h4>Quito el programador</h4>';

//Quito el programador y pruebo las funcionalidades
$empresa->remove_empleado($programador);
//Tambien lo podía quitar por id:
	//$empresa->remove_empleado('1');


$listado = $empresa->get_listado_empleados();
echo 'listado empleados:';
mostrar_tabla($listado);
echo 'promedio edad: ' . $empresa->promedio_edad() . '<br>';
$emp = ($empresa->get_empleado(2));
if(is_object($emp) && get_parent_class($emp) == 'Empleado'){
	echo $emp->get_nombre();
} else {
	echo $emp;
}