<?php declare(strict_types=1);
namespace Domain\domain\models\user;

use Domain\Shared\Domain\ValueObject\StringValueObject;

class UserLoginPW extends StringValueObject
{
    public function __construct(protected string $value)
    {
        $this->value = hash('sha256', $value);
    }
}
