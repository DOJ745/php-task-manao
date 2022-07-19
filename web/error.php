<?php
declare(strict_types = 1);

require_once __DIR__ . '\..\vendor\autoload.php';

use eftec\bladeone\BladeOne;

$viewsDir = __DIR__ . '\..\views';
$blade = new BladeOne($viewsDir);

http_response_code(401);
$errorMsg =  http_response_code() . ": Unauthorized";

try {
    echo $blade->run('error', ['errorMsg' => $errorMsg]);
}
catch (Exception $e) {}