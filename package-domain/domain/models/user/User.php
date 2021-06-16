<?php declare(strict_types=1);
namespace MyApp\domain\models\user;

class User 
{
    protected UserID $uid;
    protected UserLoginID $loginid;
    protected UserLoginPW $loginpw;
    protected UserName $name;

    /**
     * 
     */
    public function __constract(
        UserID $uid,
        UserLoginID $loginid,
        UserLoginPW $loginpw,
        UserName $name
    ) {
        $this->uid = $uid;
        $this->loginid = $loginid;
        $this->loginpw = $loginpw;
        $this->name = $name;
    }
}


?>