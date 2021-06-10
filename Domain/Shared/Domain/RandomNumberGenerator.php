<?php

declare(strict_types=1);

namespace Domain\Shared\Domain;

interface RandomNumberGenerator
{
    public function generate(): int;
}
