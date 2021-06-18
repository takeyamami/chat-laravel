<?php declare(strict_types=1);
namespace MyApp\domain\models\user;

use MyApp\Shared\Domain\ValueObject\StringValueObject;

class UserLoginPW extends StringValueObject
{
    public function __construct(protected string $value)
    {
        $this->value = hash('sha256', $value);
    }
}
