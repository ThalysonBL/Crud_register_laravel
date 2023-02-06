<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
        //CADASTRO DE USUÁRIO UTILIZANDO O MODEL
       // $user = new User();
        //$user->name = 'Thalyson Web';
       // $user->email = 'cursos123@gmail.com';
      //  $user->password = Hash::make( '123455'); //encriptografar senha
      //  $user->save();
       // dd($user);

        //echo "<h1>Listagem de usuário<h1>";
        $user = User::where('id', '=' , 1)->first();
        //dd($user);
        return view('listUser', [
            'user'=> $user
        ]); //o 'user' tem que ser o mesmo nome que está no arquivo da view listUser



    }
}
