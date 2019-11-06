<?php 
namespace ADABlog\Model;

use \ADABlog\Entity\User;

class UsersManagerPDO extends UsersManager
{
    public function add(User $user)
    {
        $q = $this->dao->prepare('INSERT INTO user VALUES(NULL, :name, :last_name, :username, :email, :password, 0, 0)');
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

    public function getId($id)
    {
        $q = $this->dao->prepare('SELECT id, name, last_name, username, member_status, administrator_status FROM user WHERE id = :id');
        $q->bindValue(':id',$id);

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

    public function modifyMemberStatus($id)
    { 
        $user = $this->getId($id);
        $requete = $this->dao->prepare('UPDATE user SET member_status = :member_status WHERE id = :id');
        $requete->bindValue(':id', $user->id());
        if ($user->member_status() == 0) {
            $requete->bindValue(':member_status', 1);
        } else {
            $requete->bindValue(':member_status', 0);
        }

        $requete->execute();
    }

    public function getEmail($email)
    {
        $q = $this->dao->prepare('SELECT email FROM user WHERE email = :email');
        $q->bindValue(':email',$email);

        $q->execute();
        
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\User');
        $email = $q->fetch();
        
        return $email;
    }

    public function delete($id)
    {
        $this->dao->exec('DELETE FROM user WHERE id = ' . (int) $id);
    }
}