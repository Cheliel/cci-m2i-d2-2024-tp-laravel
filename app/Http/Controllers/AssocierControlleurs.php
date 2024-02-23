<?php

namespace App\Http\Controllers;

use Database\Factories\Member;
use DragonCode\Contracts\Cashier\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

include_once 'vendor/autoload.php';

class AssocierControlleurs extends  Controller {

    function index() {
        $new = (new AssocierControllers);
        echo $new->rendu('index');
    }

    function create() {
        $new = (new AssocierControllers);
        echo $new->rendu('associer.create');
        }

    function store(Request $request) {


        $request->validate([
            'Name' => 'required|min:1|max:20',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

        ]);


        $member = new Member();
        \DB::table('users')->insert(
            ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']]
        );
        }

    function show() {
    $id = $_GET['id'];
    $asso = \DB::table('users')->whereRaw('id = '.$id)->get();
    $this->rendu($asso->first());
    }

    function destroy() {
            $id = $_GET['id'];
            $r = \DB::table('users')->whereRaw('id = '.$id)->delete($id);
            if ($r) {
                $this->index();
            } else {
                echo 'Erreur';
            }

        }

    function rendu($vueName = '') {
        echo view('associer.'.$vueName);
        }

    function test($var) {
        // var_dump(
        // $var);
    }
}