<?php
declare(strict_types = 1);

namespace auth;

use db\DatabaseController;

class AuthController
{
    public function regUser(string $reqBody): string {
        $data = array('message' => 'Successful registration');
        return json_encode($data);
    }

    public function loginUser(): string {
        $data = array('message' => 'json res');
        return json_encode($data);
    }
}