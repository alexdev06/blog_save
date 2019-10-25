<?php
namespace ADABlog\Model;

use \ADABlog\Entity\News;

class NewsManagerPDO extends NewsManager
{
    public function getList($debut = -1, $limite = -1)
    {
        $sql = 'SELECT id , author, title, content, date_create, date_update FROM News ORDER BY date_create DESC';

        if ($debut != -1 || $limite != -1) {
            $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
        }

        $requete = $this->dao->query($sql);
        $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\ADABlog\Entity\News');

        $listeNews = $requete->fetchAll();

        foreach ($listeNews as $News) {
            $News->setDate_create(new \DateTime($News->date_create()));
            $News->setDate_update(new \DateTime($News->date_Update()));
        }

        $requete->closeCursor();

        return $listeNews;
    }

    public function getListPagined($page)
    {
        $limite = 5;
        $debut = ($page - 1) * $limite;
        $sql = 'SELECT id , author, title, content, date_create, date_update FROM News ORDER BY date_create DESC LIMIT :limit OFFSET :debut';
        $requete = $this->dao->prepare($sql);
        
        $requete->bindValue(':limit', $limite, \PDO::PARAM_INT);
        $requete->bindValue(':debut', $debut, \PDO::PARAM_INT);
        $requete->execute();

        $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\ADABlog\Entity\News');

        $listeNews = $requete->fetchAll();

        foreach ($listeNews as $News) {
            $News->setDate_create(new \DateTime($News->date_create()));
            $News->setDate_update(new \DateTime($News->date_Update()));
        }

        $requete->closeCursor();

        return $listeNews;

    }


    public function getUnique($id)
    {
        $sql = 'SELECT id, author, title, content, date_create, date_update FROM news WHERE id = :id';
        $requete = $this->dao->prepare($sql);
        $requete->bindValue(':id', $id);
        $requete->execute();

        $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'ADABlog\Entity\News');

        if ($news = $requete->fetch()) {
            $news->setDate_create(new \DateTime($news->date_create()));
            $news->setDate_update(new \DateTime($news->date_update()));

            return $news;
        }

        return null;
    }

    public function count()
    {
        return $this->dao->query('SELECT COUNT(*) FROM news')->fetchColumn();
    }

    protected function add(News $news)
    {
        $requete = $this->dao->prepare('INSERT INTO news SET author = :author, title = :title, content = :content, date_create = NOW(), date_update = NOW()');

        $requete->bindValue(':title', $news->title());
        $requete->bindValue(':author', $news->author());
        $requete->bindValue(':content', $news->content());

        $requete->execute();

    }

    public function modify(News $news)
    {
        $requete = $this->dao->prepare('UPDATE news SET author = :author, title = :title, content = :content, date_update = NOW() WHERE id = :id');

        $requete->bindValue(':title' , $news->title());
        $requete->bindValue(':author', $news->author());
        $requete->bindValue(':content', $news->content());
        $requete->bindValue(':id', $news->id(), \PDO::PARAM_INT);

        $requete->execute();
    }

    public function delete($id)
    {
        $this->dao->exec('DELETE FROM news WHERE id = ' . (int) $id);
    }


}