<?php

function tipo_angulos($A,$B,$C){
	$r='acutángulo';
	
	if($A==90 or $B==90 or $C==90)
		$r='rectángulo';
	
	if ($A>90 or $B>90 or $C>90)
		$r='obtusángulo';
	return $r;
}
function tipo_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='equilátero';
	return $r;
}
function triangulos ($a,$b,$c,$A,$B,$C){
	$r1=tipo_lados($a,$b,$c);
	$r2=tipo_angulos($A,$B,$C);
	
	return $r1.' - '.$r2;
}
echo triangulos (1,1,1,60,60,60).' ¿equilátero? ¿acutángulo? <br>';
echo triangulos (1,1,2,45,45,90).' ¿isóceles? ¿rectángulo? <br>';
echo triangulos (2,3,1,110,35,35).' ¿escaleno? ¿obstusángulo? <br>';
echo triangulos (2,1,1,45,90,45).' ¿isoceles? ¿rectángulo? <br>';
echo triangulos (3,2,1,35,110,35).' ¿escaleno? ¿obstusángulo? <br>';
