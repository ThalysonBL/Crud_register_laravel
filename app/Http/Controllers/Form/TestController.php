<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all(); //Como foi criado o banco de dados o resultado é armazenado aqui
        // dd($users);
        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $user)
    {
        return view('listUser', [
            'user' => $user
        ]);
    }

    public function formAddUser()
    {
        return view('newUser');
    }

    public function storeUser(Request $request)//É o retorno dos dados que foram mandados no método POST no newUser
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.listAllUser');
    }

    public function formEditUser(User $user)
    {
        return view('editUser', [
            'user' => $user
        ]);
    }

    public function edit(User $user, Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) { //filter_var(ativa um filtro para saber se o email do cliente é valido)
            $user->name = $request->name;
        }
        $user->email = $request->email;
        if ("empty($request->password") {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('users.listAllUser');


    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.listAllUser');

    }
}
