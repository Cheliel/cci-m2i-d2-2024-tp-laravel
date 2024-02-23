<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // This is only default controller
    function index() {

        var_dump("hallo");
        $new = (new Controller);
        $titre = 'Accueil';
        $menu = [
            [
                'url' => '/',
                'nom' => 'Accueil'
            ],
            [
                'url' => '/about',
                'nom' => 'A propos'
            ],
            [
                'name' => 'Contact'
            ]
        ];
       // require __DIR__."/templates/index.php";
    }
}
