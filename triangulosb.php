<?php

function tipo_ángulos($a,$b,$c){
	$r='acutángulo';
	
	if($a==90 or $b==90 or $c==90)
		$r='rectángulo';
	
	if ($a>90 or $b>90 or $c>90)
		$r='obtusángulo';
	
	return $r;
}	
echo tipo_angulos(90,50,40).' ¿rectángulo?<br>';
echo tipo_angulos(80,60,40).' ¿acutángulo?<br>';
echo tipo_angulos(100,30,50).' ¿obstusángulo?<br>';
echo tipo_angulos(50,60,70).' ¿acutángulo?<br>';
echo tipo_angulos(90,80,10).' ¿rectángulo?<br>';
echo tipo_angulos(40,20,120).' ¿obtusángulo?<br>';
