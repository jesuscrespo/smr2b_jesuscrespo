<?php
function mes($n){
	$meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
	return $meses[$n-1];
}
#echo mes(7);
for($i=2;$i<=12;$i=$i+2){
	echo mes($i).'<br>';
}
if(strstr $meses('$mes','r')){
	echo 'con R, NO PUEDES';
}
else{
	echo 'sin R, SI PUEDES';
}