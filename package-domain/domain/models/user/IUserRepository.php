<?php

declare(strict_types=1);

namespace MyApp\domain\models\user;

interface IUserRepository
{
    public function findByLoginID(UserLoginID $loginid): User;
    public function save(User $user): void;
}