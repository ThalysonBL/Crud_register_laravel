<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|!
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::prefix(prefix: 'usuarios')->group(function () {
    Route::get('', function () {
        return 'usuário';
    })->name(name: 'usuarios');

    Route::get('/{id}', function () {
        return 'Mostrar detalhes';
    })->name(name: 'usuario.show');

    Route::get('/{id}/tags', function () {
        return 'Tags do usuário';
    })->name(name: 'usuario.tags');
});


Route::get('/a-empresa/{string?}', function ($string = null) { //se o params for opcional o param da function tem que ser NULL
    return $string;
    //return view('welcome');
})->name(name: 'a-empresa');

*/


Route::get('/', function () {
    return view(view: 'welcome');
    //return view('welcome');
})->name(name: 'Página welcome');


Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;
    //return view('welcome');
});

Route::get('/listagem', 'App\Http\Controllers\UserController@listUser');


//VERBALIZAÇÃO
Route::get('usuarios', 'App\Http\Controllers\Form\\TestController@listAllUsers')->name('users.listAllUser');


Route::get('usuarios/novo', 'App\Http\Controllers\Form\\TestController@formAddUser')->name('users.formAddUser');

Route::get('usuarios/editar/{user}', 'App\Http\Controllers\Form\\TestController@formEditUser')->name('users.formEditUser');

Route::get('usuarios/{user}', 'App\Http\Controllers\Form\\TestController@listUser')->name('users.listUser');

Route::post('usuarios/store', 'App\Http\Controllers\Form\\TestController@storeUser')->name('users.store');


//ATUALIZAR REGISTRO
Route::put('usuarios/edit/{user}', 'App\Http\Controllers\Form\\TestController@edit')->name('users.edit');


//REMOVER REGISTRO
Route::delete('usuarios/destroy/{user}', 'App\Http\Controllers\Form\\TestController@destroy')->name('user.destroy');
