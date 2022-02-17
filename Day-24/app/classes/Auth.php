<?php


namespace App\classes;


class Auth
{
        protected $email;
        protected $password;
        protected $authEmail;
        protected $authPassword;
        public function __construct($post=null)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }

    public function login()
    {
        $this->authEmail = 'admin@gmail.com';
        $this->authPassword = '12345678';
        if ($this->email == $this->authEmail && $this->password == $this->authPassword)
        {
            header('Location: action.php?pages=file-upload');
        } else {
            return 'sorry../....email or password is not match';
        }
    }

    public function logout()
    {
        header('Location: action.php?pages=login');
    }
}