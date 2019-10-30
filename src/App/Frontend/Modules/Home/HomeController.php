<?php
namespace ADABlog\App\Frontend\Modules\Home;

use ADABlog\Fram\BackController;
use ADABlog\Fram\HTTPRequest;

class HomeController extends BackController
{
    public function executeIndex(HTTPRequest $request)
    {
        $this->page->addvar('title', 'Accueil');
    }

}