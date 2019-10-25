<?php
namespace ADABlog\App\Backend\Modules\Comments;

use \ADABlog\Fram\BackController;
use \ADABlog\Fram\HTTPRequest;


class CommentsController extends BackController
{
    public function executeIndex(HTTPRequest $request)
    {
        $this->page->addVar('comments', $this->managers->getManagerOf('Comments')->getList());
    }

    public function executeDelete(HTTPRequest $request)
    {
        $this->managers->getManagerOf('Comments')->delete($request->getData('id'));
        $this->app->visitor()->setFlash('Le commentaire a bien été supprimée !');
        $this->app->httpResponse()->redirect('/admin-comments');
    }

    public function executeUpdate(HTTPRequest $request)
    {
        $this->managers->getManagerOf('Comments')->modifyCommentStatus($request->getData('id'));
        $this->app->visitor()->setFlash('Le commentaire a bien été modifié !');
        $this->app->httpResponse()->redirect('/admin-comments');
    }

    public function executeShowNews(HTTPRequest $request)
    {
        $news = $this->managers->getManagerOf('News')->getUnique($request->getData('id'));

        if (empty($news)) {
            $this->app->httpResponse()->redirect404();
        }

        $this->page->addVar('comments', $this->managers->getManagerOf('Comments')->getListOf($news->id()));
    }
}