<a href="http://192.168.0.105/smr2b_cesar/smr2b.php">cesar</a>
jesus
<a href="http://192.168.0.139/smr2b_david/smr2b.php">campo</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>