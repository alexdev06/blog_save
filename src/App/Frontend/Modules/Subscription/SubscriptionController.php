<?php
namespace ADABlog\App\Frontend\Modules\Subscription;

use ADABlog\Fram\BackController;
use ADABlog\Fram\HTTPRequest;
use ADABlog\Entity\User;

class SubscriptionController extends BackController
{
    public function executeSubRequest(HTTPRequest $request)
    {
        $this->page->addVar('title', 'Ajout d\'un utilisateur');

        if ($request->postExists('username')) {
            $pass = $request->postData('password');
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            
            $user = new User([
                'name' => $request->postData('name'),
                'last_name' => $request->postData('last_name'),
                'username' => $request->postData('username'),
                'email' => $request->postData('email'),
                'password' => $pass,
                'group' => $request->postData('group')
            ]);

             $this->managers->getManagerOf('user')->add($user);
        }

    }

}