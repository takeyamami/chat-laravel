<?php declare(strict_types=1);
namespace MyApp\domain\models\room;

class Room 
{
    protected RoomID $rid;
    protected RoomName $name;
    protected array $users;

    /**
     * 
     */
    public function __constract(
        RoomID $rid,
        RoomName $name,
        array $users
    ) {
        $this->rid = $rid;
        $this->name = $name;
        $this->users = $users;
    }
}


?>