<?php
declare(strict_types = 1);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die(header( 'location: /error.php' ));
}

$entityBody = file_get_contents('php://input');
$data = array('message' => 'response from test_ajax');
$jsonData = json_encode($data);
print_r($jsonData);


/*$url = 'http://localhost:8000';
$data = array('message' => 'response from test_ajax');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json;charset=utf-8\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) {  }

var_dump($result);*/