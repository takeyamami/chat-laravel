<?php

namespace MyApp\application\Talks;

use MyApp\domain\models\talk\Talk;
use MyApp\domain\models\talk\ITalkRepository;

class TalkApplicationService
{
    protected ITalkRepository $_repository;

    /**
     * 
     */
    public function __construct(ITalkRepository $repository) 
    {
        $this->_repository = $repository;
    }

    public function register(int $rid, int $uid, string $message)
    {
        $talk = new Talk(
            0,
            $rid,
            $uid,
            $message
        );

        $this->_repository->save($talk);
    }
}
