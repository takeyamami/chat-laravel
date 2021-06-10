<?php declare(strict_types=1);
namespace Domain\domain\models\user;

class User 
{
    protected UserLoginID $loginid;
    protected UserLoginPW $loginpw;
    protected UserName $name;

    /**
     * 
     */
    public function __constract(
        UserLoginID $loginid,
        UserLoginPW $loginpw,
        UserName $name
    ) {
        $this->loginid = $loginid;
        $this->loginpw = $loginpw;
        $this->name = $name;
    }
}


?>