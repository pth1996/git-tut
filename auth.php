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
    public function auth()
    {
	return $this->user;
    }
}

$user = new Auth(new User('Zaw Zaw', 'encrypted_password'));
$user->auth();	
