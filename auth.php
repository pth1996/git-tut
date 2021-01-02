<?php

class Auth
{
   protected $user;

   public function __construct(User $user)
   {
       $this->user = $user;
   }
}
