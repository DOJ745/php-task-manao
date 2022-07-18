<?php
declare(strict_types = 1);

namespace db;

class DatabaseController
{
    private string $FILENAME = 'db.json';

    public function saveUser(string $userData): bool {
        if(file_put_contents($this->FILENAME, $userData, FILE_APPEND)){
            return true;
        }
        return false;
    }

    public function isLoginExists(string $userLogin): bool {
        $dbData = json_decode(file_get_contents($this->FILENAME));
        if($dbData[$userLogin] !== null) {
            return true;
        }
        return false;
    }

    public function isEmailExists(string $userEmail): bool {
        $dbData = json_decode(file_get_contents($this->FILENAME));
        return false;
    }
}