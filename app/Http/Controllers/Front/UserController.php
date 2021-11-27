<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName(){
        return 'Marwan Thabet';
    }

    public function getIndex(){

        /*$data=[];
        $data['id']=5;
        $data['name']='Marwan Thabet';*/

        /*$obj = new \stdClass();
        $obj -> name = 'Marwan';
        $obj -> id = 5;
        $obj -> gender = 'male';*/

        $data = ['Marwan' , 'Thabet'];

        //return view('welcome',$data);
        //return view('welcome',compact('obj'));
       //return view('welcome') -> with('name' , 'Marwan Ahmed');
        return view('welcome' , compact('data'));

    }
}
