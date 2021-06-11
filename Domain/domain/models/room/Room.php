<?php declare(strict_types=1);
namespace Domain\domain\models\room;

class Room 
{
    protected RoomID $rid;
    protected RoomName $name;
    protected UserName $name;

    /**
     * 
     */
    public function __constract(
        RoomID $rid,
        RoomName $lonameginpw,
    ) {
        $this->rid = $rid;
        $this->name = $name;
    }
}


?>