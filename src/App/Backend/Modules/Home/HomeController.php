<?php
namespace ADABlog\App\Backend\Modules\Home;

use \ADABlog\Fram\BackController;
use \ADABlog\Fram\HTTPRequest;

class HomeController extends BackController
{
    public function executeIndex(HTTPRequest $request)
        {
            $this->page->addVar('title', 'Gestion des news');
            $manager = $this->managers->getManagerOf('News');
    
            $this->page->addVar('listeNews', $manager->getList());
            $this->page->addVar('nombreNews', $manager->count());
    
            $this->page->addVar('comments', $this->managers->getManagerOf('Comments')->getListOfUnpublished());
        }

}