<?php
function Carga(){ 
	list($usec, $sec) = explode(" ", microtime()); 
	return ((float)$usec + (float)$sec); 
}
$tiempo_inicio = Carga(); 
$tiempo_final = Carga();
$tiempo = number_format($tiempo_final - $tiempo_inicio, 5); 
echo "<center><pre>Esta p&aacute;gina fue generada en {$tiempo} milisegundos</pre></center>"; 
?>
<center>
<a href="<?php echo URL; ?>"><img src="https://avatars0.githubusercontent.com/u/3411968" width="25%"></img></a>
<h3>..Y este es mi Framework</h3>
<a href="https://github.com/oneluiz/php/"><h3><i class="fa fa-github"></i> Github</h3></a>
</center>