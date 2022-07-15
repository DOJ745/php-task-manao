<?php

require __DIR__ . '\vendor\autoload.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '\views';
$blade = new BladeOne($views);
try {
    echo $blade->run('index', ['variable1' => 'value1']);
}
catch (Exception $e) {

}