<?php

//echo date('d/m/Y').PHP_EOL;

$data = new DateTime();
$intervalo = new DateInterval('PT5M');

echo $data->format('d-m-Y H:i:s').PHP_EOL;

$data->add($intervalo);

echo $data->format('d-m-Y H:i:s').PHP_EOL;