<?php
namespace ADABlog\App\Backend\Modules\Connexion;

use \ADABlog\Fram\BackController;
use \ADABlog\Fram\HTTPRequest;


class ConnexionController extends BackController
{
    public function executeIndex(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Connexion');

        if ($request->postExists('login')) {
            $login = $request->postData('login');
            $password = $request->postData('password');

            $manager = $this->managers->getManagerOf('users');
            $user = $manager->get($login);

            $isPasswordCorrect = password_verify($password, $user->password());

            if ($user->username() == $login && $isPasswordCorrect){

                $this->app->userx()->setAuthenticated(true);
                $this->app->httpResponse()->redirect('/admin-home');
            } else {
                $this->app->userx()->setFlash('Pseudo ou mot de passe incorrect');
            }
        }
    }

    public function executeDestroy(HTTPRequest $request)
    {
        $_SESSION = array();
        session_destroy();

        $this->app->httpResponse()->redirect('.');
    }
    

}