<?php

declare(strict_types=1);

namespace Domain\domain\models\talk;

interface ITalkRepository
{
    public function save(Talk $talk): void;
}