<?php

declare(strict_types=1);

namespace Domain\domain\models\talk;

use Domain\Shared\Domain\DomainError;

final class TalkMessageError extends DomainError
{
    public function __construct(private TalkMessage $message)
    {
        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'message_too_many_characters';
    }

    protected function errorMessage(): string
    {
        return sprintf('<%s> is <%s> byte', $this->message->value(), strlen($value));
    }
}