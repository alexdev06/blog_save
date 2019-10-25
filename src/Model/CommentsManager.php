<?php 
namespace ADABlog\Model;

use ADABlog\Fram\Manager;
use ADABlog\Entity\Comment;

abstract class CommentsManager extends Manager
{
    abstract public function getId($id);
    abstract public function getListOf($news_id);
    abstract public function getListOfUnpublished();
    abstract public function add(Comment $comment);
    abstract public function modifyCommentStatus($id);
    abstract public function delete($id);

    public function save(Comment $comment)
    {
        if ($comment->isValid()) {
            $comment->isNew() ? $this->add($comment) : $this->modify($comment);
        } else {
            throw new \RuntimeException('Le commentaire doit être validé pour être enregristré');
        }
    }
}