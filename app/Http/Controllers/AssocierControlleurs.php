<?php

namespace App\Http\Controllers;

use Database\Factories\Member;
use DragonCode\Contracts\Cashier\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

include_once 'vendor/autoload.php';

class AssocierControlleurs extends  Controller {

    function index() 
    {
        $new = (new AssocierControllers);
        echo $new->rendu('index');
    }

    function create() 
    {
        $new = (new AssocierControllers);
        echo $new->rendu('associer.create');
    }

    function store(Request $request) 
    {


        $request->validate([
            'name' => 'required|min:1|max:20',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);


        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone_number = $request->phone_number;
        $member->save();
        to_route('homePage');
    }

    function show(Request $request) {
    $member = Member::Where('id', '=', $request->id)->first();

    $this->rendu($member);
    }

    function destroy(Request $request) 
    {

        Member::destroy($request->id);
        to_route('homePage');
    }

    function rendu($vueName = '') 
    {
        echo view('associer.'.$vueName);
    }

    function test($var) 
    {
        // var_dump(
        // $var);
    }
}