<?php
function tipo_lados($a,$b,$c){
	$r='Escaléno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='Equilátero';
	return $r;
}
echo tipo_lados(1,1,1).' ¿Equilátero?<br>';

echo tipo_lados(1,2,1).' ¿Isósceles?<br>';

echo tipo_lados(1,3,2).' ¿Escaleno?<br>';

echo tipo_lados(3,1,1).' ¿Isósceles?<br>';

echo tipo_lados(1,3,1).' ¿Isósceles?<br>';

echo tipo_lados(3,1,2).' ¿Escaleno?<br>';

echo tipo_lados(3,2,1).' ¿Escaleno?<br>';

echo tipo_lados(2,1,3).' ¿Escaleno?<br>';

echo tipo_lados(2,1,1).' ¿Isósceles?<br>';

echo tipo_lados(1,1,3).' ¿Isósceles?<br>';
