<?php 
namespace ADABlog\Model;

use \ADABlog\Fram\Manager;
use \ADABlog\Entity\User;

class UsersManager extends Manager
{
    abstract public function add(User $user);
    abstract public function get($login);
    abstract public function getList();
    abstract public function changeStatus(User $user);
    abstract public function delete($id);
}