<?php

declare(strict_types=1);

namespace MyApp\Shared\Domain;

interface RandomNumberGenerator
{
    public function generate(): int;
}
