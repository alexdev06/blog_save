<?php
namespace ADABlog\Entity;

use \ADABlog\Fram\Entity;

class User extends Entity
{
    protected $name;
    protected $last_name;
    protected $username;
    protected $email;
    protected $password;
    protected $member_status;
    protected $administrator_status;

    // SETTERS

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLast_name($lastName)
    {
        $this->last_name = $lastName;
    }

    public function setUsername($userName)
    {
        $this->username = $userName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setMember_status($status)
    {
        $this->member_status = $status;
    }

    public function setAdministrator_Status($status)
    {
        $this->administrator_status = $status;
    }


    //GETTERS

    public function name()
    {
        return $this->name;
    }

    public function last_name()
    {
        return $this->last_name;
    }

    public function username()
    {
        return $this->username;
    }

    public function email()
    {
        return $this->email;
    }

    public function password()
    {
        return $this->password;
    }

    public function member_status()
    {
        return $this->member_status;
    }
    public function administrator_status()
    {
        return $this->administrator_status;
    }
}