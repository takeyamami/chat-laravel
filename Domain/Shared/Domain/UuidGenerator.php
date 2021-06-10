<?php

declare(strict_types=1);

namespace Domain\Shared\Domain;

interface UuidGenerator
{
    public function generate(): string;
}
