<?php declare(strict_types=1);
namespace MyApp\domain\models\talk;

use MyApp\Shared\Domain\ValueObject\StringValueObject;

class TalkMessage extends StringValueObject
{
    public function __construct(protected string $value)
    {
        if(strlen($value) > 10000) {
            throw new TalkMessageError($value);  
        }
    }
}
