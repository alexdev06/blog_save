<?php
namespace ADABlog\Model;

use ADABlog\Entity\Comment;

class CommentsManagerPDO extends CommentsManager
{
    public function getListOf($news_id)
    {
        $q = $this->dao->prepare('SELECT id, news_id, author, content, date_create, published FROM comment WHERE news_id = :news_id');
        $q->bindValue(':news_id', $news_id);
        $q->execute();

        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\Comment');

        $comments = $q->fetchAll();

        foreach ($comments as $comment) {
            $comment->setDate_create(new \DateTime($comment->date_create()));
        }

        return $comments;
    }

    public function getList()
    {
        $q = $this->dao->query('SELECT id, news_id, author, content, date_create, published FROM comment');
      
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\Comment');

        $comments = $q->fetchAll();

        foreach ($comments as $comment) {
            $comment->setDate_create(new \DateTime($comment->date_create()));
        }

        return $comments;
    }

    public function getListOfUnpublished()
    {
        $q = $this->dao->query('SELECT id, news_id, author, content, date_create FROM comment WHERE published = 0 ORDER BY date_create DESC');
      
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\Comment');

        $comments = $q->fetchAll();

        foreach ($comments as $comment) {
            $comment->setDate_create(new \DateTime($comment->date_create()));
        }

        return $comments;
    }

    public function add(Comment $comment)
    {
        $q = $this->dao->prepare('INSERT INTO comment SET news_id = :news_id, author = :author, content = :content, date_create = NOW()');

        $q->bindValue(':news_id', $comment->news_id(), \PDO::PARAM_INT);
        $q->bindValue(':author', $comment->author());
        $q->bindValue(':content', $comment->content());

        $q->execute();

        $comment->setId($this->dao->lastInsertId());

    }
    
    public function getId($id)
    {
        $q = $this->dao->prepare('SELECT id, news_id, author, content, published FROM comment WHERE id = :id');
        $q->bindValue(':id', $id);
        
        $q->execute();
        
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\Comment');
        
        $comment = $q->fetch();

        return $comment;
    }

    public function delete($id)
    {
        $this->dao->exec('DELETE FROM comment WHERE id = ' . (int) $id);
    }

    public function modifyCommentStatus($id)
    { 
        $comment = $this->getId($id);
        $requete = $this->dao->prepare('UPDATE comment SET published = :published WHERE id = :id');
        $requete->bindValue(':id', $comment->id());
        if ($comment->published() == 0) {
            $requete->bindValue(':published', 1);
        } else {
            $requete->bindValue(':published', 0);
        }

        $requete->execute();
    }

}