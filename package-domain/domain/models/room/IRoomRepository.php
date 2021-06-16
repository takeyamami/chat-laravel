<?php

declare(strict_types=1);

namespace MyApp\domain\models\room;

interface IRoomRepository
{
    public function save(Room $room): void;
}