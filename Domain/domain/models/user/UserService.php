<?php declare(strict_types=1);
namespace Domain\domain\models\user;

class UserService 
{
    private IUserRepository $_userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->_userRepository = $userRepository;
    }

    public function exists(User $user) : bool
    {
        $user = $this->_userRepository->findByLoginID($user['LoginID']);

        return $user !== FALSE;
    }
}


?>