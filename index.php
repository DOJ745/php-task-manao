<?php

require __DIR__ . '\vendor\autoload.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '\views';
$blade = new BladeOne($views);
try {
    echo $blade->run('auth.sign_up');
}
catch (Exception $e) {

}