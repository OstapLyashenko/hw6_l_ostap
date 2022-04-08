<?php
declare(strict_types=1);

require_once 'autoload.php';

$user = new \Hillel\Models\Users();
$c1 = new \Hillel\ValueObjects\RgbColor();
$action = new \Hillel\Controlers\http\HomeAction();

var_dump($user);
var_dump($action);
var_dump($c1);
