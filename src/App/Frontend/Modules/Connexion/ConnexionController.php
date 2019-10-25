<?php
namespace ADABlog\App\Frontend\Modules\Connexion;

use \ADABlog\Fram\BackController;
use \ADABlog\Fram\HTTPRequest;


class ConnexionController extends BackController
{
    public function executeIdentification(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Connexion');

        if ($request->postExists('login')) {
            $login = $request->postData('login');
            $password = $request->postData('password');

            $manager = $this->managers->getManagerOf('users');
            $user = $manager->get($login);

            $isPasswordCorrect = password_verify($password, $user->password());

            if ($user->username() == $login && $isPasswordCorrect){
                if ($user->administrator_status() == true) {
                    $this->app->visitor()->setAuthenticated(true);
                    $this->app->visitor()->setAdministrator(true);
                    $this->app->httpResponse()->redirect('/admin-news');
                } elseif ($user->member_status() == 1 && $user->administrator_status() == 0) {
                    $this->app->visitor()->setAuthenticated(true);
                    $this->app->httpResponse()->redirect('/admin-news');
                } else {
                    $this->app->httpResponse()->redirect('/news');
                }
            } else {
                $this->app->visitor()->setFlash('Pseudo ou mot de passe incorrect');
                $this->app->httpResponse()->redirect('/connexion');
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