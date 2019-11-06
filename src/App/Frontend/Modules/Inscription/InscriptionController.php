<?php
namespace ADABlog\App\Frontend\Modules\Inscription;

use ADABlog\Fram\BackController;
use ADABlog\Fram\HTTPRequest;
use ADABlog\Entity\User;

class InscriptionController extends BackController
{
    public function executeInscRequest(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Ajout d\'un utilisateur');

        if ($request->postExists('login')) {
            // reCAPTCHA
           /* $secret = "6LehGMAUAAAAAGT7FXQAvNN5APjP9d6mh7Qlp_rM";
            $response = $_POST['g-recaptcha-response'];
            $remoteip = $_SERVER['REMOTE_ADDR'];
            
            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip ;
            
            $decode = json_decode(file_get_contents($api_url), true);
        
            if ($decode['success'] == true) {*/
                $pass = $request->postData('password');
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                
                $user = new User([
                    'name' => $request->postData('name'),
                    'last_name' => $request->postData('lastName'),
                    'username' => $request->postData('login'),
                    'email' => $request->postData('email'),
                    'password' => $pass,
                ]);
                $pseudo = $this->managers->getManagerOf('Users')->get($user->username());
                if (isset($pseudo) && $pseudo != false) {
                   die('Le nom d\'utilisateur existe déjà!');
                } else {
                    $this->managers->getManagerOf('Users')->add($user);
                }
                
            //}

        }

    }

}