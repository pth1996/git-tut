<?php

class User
{
    protected $name;
    protected $password;

    public function __construct($name, $password)
    {
    	$this->name = $name;
    	$this->password = $password;
    }

}


class Auth
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function auth()
    {
	   return $this->user;
    }
}

$user = new Auth(
    new User('Zaw Zaw', 'encrypted_password')
);
$user->auth();	
