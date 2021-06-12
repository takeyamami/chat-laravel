<?php

declare(strict_types=1);

namespace Domain\domain\models\user;

interface IUserRepository
{
    public function findByLoginID(UserLoginID $loginid): User;
    public function save(User $user): void;
}