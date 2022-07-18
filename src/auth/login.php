<?php
declare(strict_types = 1);

namespace auth;
require_once 'AuthController.php';

$reqBody = file_get_contents('php://input');

$authController = new AuthController();
$result = $authController->loginUser($reqBody);
print_r($result);