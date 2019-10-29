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

            $manager = $this->managers->getManagerOf('Users');
            $user = $manager->get($login);

            $isPasswordCorrect = password_verify($password, $user->password());

            if ($user->username() == $login && $isPasswordCorrect){
                if ($user->administrator_status() == true) {
                    $this->app->visitor()->setAuthenticated(true);
                    $this->app->visitor()->setAdministrator(true);
                    $this->app->httpResponse()->redirect('admin-home');
                } else {
                    $this->app->visitor()->setAuthenticated(true);
                    $this->app->httpResponse()->redirect('/admin-home');
                }
            } else {
                $this->app->visitor()->setFlash('Pseudo ou mot de passe incorrect');
                $this->app->httpResponse()->redirect('/admin');
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