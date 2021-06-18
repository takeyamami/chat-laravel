<?php

namespace MyApp\Infrastructure\Persistence;

use MyApp\domain\models\talk\ITalkRepository;
use MyApp\domain\models\talk\Talk;
use MyApp\Models\Talk AS TalkModel;

class TalkRepository implements ITalkRepository
{
    public function save(Talk $talk) :void
    {    
        $data = $this->_transfer($talk);
        $data->save();
    }

    private function _transfer(Talk $from) :TalkModel
    {
        $talkModel = new TalkModel;
        $talkModel->rid = $from->rid();
        $talkModel->uid = $from->uid();
        $talkModel->message = $from->message();

        return $talkModel;
    }
}
