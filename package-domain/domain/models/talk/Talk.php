<?php declare(strict_types=1);
namespace MyApp\domain\models\talk;

use Domain\domain\models\room\RoomID;
use Domain\domain\models\user\UserID;

class Talk 
{
    protected TalkID $tid;
    protected RoomID $rid;
    protected UserID $uid;
    protected TalkMessage $message;

    /**
     * 
     */
    public function __constract(
        TalkID $tid,
        RoomID $rid,
        UserID $uid,
        TalkMessage $message
    ) {
        $this->tid = $tid;
        $this->rid = $rid;
        $this->uid = $uid;
        $this->message = $message;
    }
}


?>