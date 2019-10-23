<?php 
namespace ADABlog\Model;

use \ADABlog\Entity\User;

class UsersManagerPDO extends UsersManager
{
    public function add(User $user)
    {
        $q = $this->dao->prepare('INSERT INTO user VALUES(NULL, :name, :last_name, :username, :email, :password, NULL, NULL)');
        $q->bindValue(':name' , $user->name());
        $q->bindValue(':last_name', $user->last_name());
        $q->bindValue('username', $user->username());
        $q->bindValue('email', $user->email());
        $q->bindValue('password', $user->password());
        
        $q->execute();

        $user->setId($this->dao->lastInsertId());
    }

    public function get($login)
    {
        $q = $this->dao->prepare('SELECT username, password, member_status, administrator_status FROM user WHERE username = :username');
        $q->bindValue(':username',$login);

        $q->execute();
        
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\User');
        $user = $q->fetch();
        
        return $user;
    }

    public function getList()
    {
        $q = $this->dao->query('SELECT id, name, last_name, username, email, member_status, administrator_status FROM user');
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\User');
        
        $listeUsers = $q->fetchAll();

        $q->closeCursor();

        return $listeUsers;

    }

    public function modifyMemberStatus(User $user)
    {
        $requete = $this->dao->prepare('UPDATE user SET member_status = :member_status');
        if ($user->administrator_status() == false) {
            $requete->bindValue(':member_status', true);
            $requete->execute();
        }

        $requete->execute();
    }

    public function delete($id)
    {
        $this->dao->exec('DELETE FROM user WHERE id = ' . (int) $id);
    }
}