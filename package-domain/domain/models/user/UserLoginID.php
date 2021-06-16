<?php declare(strict_types=1);
namespace MyApp\domain\models\user;

use Domain\Shared\Domain\ValueObject\StringValueObject;

class UserLoginID extends StringValueObject
{
    public function __construct(protected string $value)
    {
        $this->value = hash('sha256', $value);
    }
}
