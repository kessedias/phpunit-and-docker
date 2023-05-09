<?php
//Essa página é apenas um teste estático para validar a funcionalidade
//Para utilizar o teste automatizado use vendor\bin\phpunit tests após rodar composer install
use app\libraries\helpers;
require_once(__DIR__.'/vendor/autoload.php');

$helpers = new helpers();

$date = '2022-12-31';
$view = $helpers->getCurrentDayOfTheYear($date);

print('<hr>');
print($view);
print('<hr>');

