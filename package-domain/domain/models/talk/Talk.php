<?php declare(strict_types=1);
namespace MyApp\domain\models\talk;

class Talk
{
    protected int $tid;
    protected int $rid;
    protected int $uid;
    protected string $message;

    /**
     * 
     */
    public function __construct(
        int $tid,
        int $rid,
        int $uid,
        string $message
    ) {
        $this->tid = $tid;
        $this->rid = $rid;
        $this->uid = $uid;
        $this->message = $message;
    }

    public function rid(): int
    {
        return $this->rid;
    }

    public function uid(): int
    {
        return $this->uid;
    }

    public function message(): string
    {
        return $this->message;
    }
}


?>