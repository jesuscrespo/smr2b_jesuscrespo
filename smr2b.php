<a href="http://192.168.0.105/smr2b_cesar/smr2b.php">cesar</a>
jesus
<a href="http://192.168.0.130/smr2b_david/smr2b.php">campo</a>


<form>
	<input name="email" type="email">
	<button>Enviar</button>
</form>

<?php
$f=fopen('visitas.txt' , 'a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite ($f,$_SERVER['REMOTE_ADDR']);
fwrite ($f, "\r\n");
fclose($f);
?>

<?php
if(isset($_GET['email'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>