<?php

declare(strict_types=1);

namespace App\Model\Query\View;

use App\Model\Query\Interfaces\UserQueryInterface;
use \PDO;

class SQLUserView implements UserQueryInterface
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findByEmail(string $email)
    {
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);

    }

//    public function findByEmail(string $email)
//    {
//        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
//        $statement->bindParam(":email", $email, PDO::PARAM_STR);
//
//        return $statement->execute();
//    }
}