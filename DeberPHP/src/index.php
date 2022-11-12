<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCKER PHP</title>
</head>
<body>

<h2>FAUSTO AMAGUAÑA</h2>
<H2>AUTOMATIZACIÓN DE LOS PROCESOS DE SOFTWARE GRUPO - 2</H2>
 <H2>  <?php echo "Fecha: " . date("d") . " del " . date("m") . " de " . date("Y"); ?>  </H2>

<h3>Cargo la Libraria SOAP? <?php echo class_exists('\SoapClient') ? "SI" : "NO"; ?></h3>
<?php
//Variables
$slengua = "C";
$scurso = "2011-12";
$scoddep = "B142";
$scodest = "";
$WSDL = 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl';
$client  =  new \SoapClient($WSDL);
$resultado = $client -> wsasidepto(array('plengua' => $slengua,'pcurso' => $scurso,'pcoddep' => $scoddep,'pcodest' => $scodest));
print_r($resultado);
?> 
</body>
</html>