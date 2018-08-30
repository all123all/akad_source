<?php

$dia = date("d",mktime());

$mes = date("m",mktime());

$ano = date("Y",mktime());


$data = date ("dmY",mktime (0,0,0,$mes,$dia,$ano));

$novadata = date ("d-m-Y",mktime (0,0,0,$mes,$dia-1,$ano));

 

echo "<p>Data: $data</p>";

echo "<p>Nova Data: $novadata</p>";



?>