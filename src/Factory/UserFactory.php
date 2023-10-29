<?php

namespace App\Factory;

use App\Entity\User;

class UserFactory
{
    public static function create(string $email) 
    {
        return (new User())
            ->setEmail($email)
        ;
    }
}