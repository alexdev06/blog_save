<?php
namespace ADABlog\Model;

use ADABlog\Entity\Comment;

class CommentsManagerPDO extends CommentsManager
{
    public function getListOf($news_id)
    {
        $q = $this->dao->prepare('SELECT id, news_id, author, content, date_create FROM comment WHERE news_id = :news_id AND published = 1 ORDER BY date_create DESC');
        $q->bindValue(':news_id', $news_id, \PDO::PARAM_INT);
        $q->execute();

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
    
    public function get($id)
    {
        $q = $this->dao->prepare('SELECT id, news_id, author, content FROM comment WHERE id = :id');
        $q->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $q->execute();
        
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'blog\Entity\Comment');
        
        return $q->fetch();
    }

    public function delete($id)
    {
        $this->dao->exec('DELETE FROM comment WHERE id = ' . (int) $id);
    }

    public function validate($id)
    {
        $this->dao->exec('UPDATE comment SET published = 1 WHERE id = ' . (int) $id);
    }
}