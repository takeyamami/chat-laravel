<?php

declare(strict_types=1);

namespace MyApp\domain\models\talk;

interface ITalkRepository
{
    public function save(TalkEntity $talkEntity): void;
}