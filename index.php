<?php

include './FormPersonal.php';

 $nombres = 'Fabio';
 $apellidos = 'Garcia';
 $fecha_nacimiento = '10-08-2013';
 $documento = '102067831';
 $tipo_documento = 'cc';
 $telefono = '3906789045';
 $direccion = 'Calla 2 #10-21';
 $ciudad = 'Medellin';
 $email = 'fabio@gmail.com';


$userBasics =  new FormPersonal($nombres,$apellidos,$fecha_nacimiento,$documento,$tipo_documento,$telefono,$direccion,$ciudad,$email); 

echo $userBasics->getDataUser();
echo $userBasics->getFullUser();







