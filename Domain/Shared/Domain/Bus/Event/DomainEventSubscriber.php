<?php

declare(strict_types=1);

namespace Domain\Shared\Domain\Bus\Event;

interface DomainEventSubscriber
{
    public static function subscribedTo(): array;
}
