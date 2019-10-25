<?php
namespace ADABlog\App\Backend\Modules\Users;

use \ADABlog\Fram\BackController;
use \ADABlog\Fram\HTTPRequest;


class UsersController extends BackController
{
    public function executeIndex(HTTPRequest $request)
    {
        if ($this->app->visitor()->isAdministrator() == true) {
            $this->page->addVar('title', 'Gestion des utilisateurs');
            $manager = $this->managers->getManagerOf('Users');
            $this->page->addVar('listeUsers', $manager->getList());
        } else {
            $this->app->httpResponse()->redirect('/admin-home');
        }
    }

    public function executeDelete(HTTPRequest $request)
    {
        if ($this->app->visitor()->isAdministrator() == true) {
            $this->managers->getManagerOf('Users')->delete($request->getData('id'));
            $this->app->httpResponse()->redirect('/admin-users');
        }
    }

    public function executeUpdate(HTTPRequest $request)
    {
        if ($this->app->visitor()->isAdministrator() == true) {
            $this->managers->getManagerOf('Users')->modifyMemberStatus($request->getData('id'));
            $this->app->httpResponse()->redirect('/admin-users');
        }
    }
}