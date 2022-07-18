<?php
declare(strict_types = 1);

require_once __DIR__ . '\..\vendor\autoload.php';
use eftec\bladeone\BladeOne;

$viewsDir = __DIR__ . '\..\views';
$blade = new BladeOne($viewsDir);
try {
    echo $blade->run('auth.sign_up');
}
catch (Exception $e) {

}