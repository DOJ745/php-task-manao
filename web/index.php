<?php
declare(strict_types = 1);

require_once __DIR__ . '\..\vendor\autoload.php';
use eftec\bladeone\BladeOne;

/*if($_COOKIE['COOKIE' . session_name()] !== null && session_id() !== null){
    $url = 'http://localhost:8000/src/auth/login';
    $data = array('key1' => 'value1', 'key2' => 'value2');

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json;charset=utf-8\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //if ($result === false) {  }
}*/

$viewsDir = __DIR__ . '\..\views';
$blade = new BladeOne($viewsDir);
try {
    echo $blade->run('index');
}
catch (Exception $e) {

}