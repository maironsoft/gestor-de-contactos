<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
   if(Auth::guest()){
     	return View::make('login.index');
    }
   else
   {
   		$posibles_clientes= Contact::where("type_contact_id", 1)->orderBy('created_at', 'desc')
        ->paginate(5);
        $posibles_proveedores= Contact::where("type_contact_id", 2)->orderBy('created_at', 'desc')
        ->paginate(5);
   		$clientes= Contact::where("type_contact_id", 3)->orderBy('created_at', 'desc')
        ->paginate(5);
        $proveedores= Contact::where("type_contact_id", 4)->orderBy('created_at', 'desc')
        ->paginate(5);

      	return View::make('dashboard.index')->with(
            array(
                'clientes' => $clientes,
                'posibles_clientes' => $posibles_clientes,
                'posibles_proveedores' => $posibles_proveedores,
                'proveedores' => $proveedores,
        ));
   }
});

//url que permite cerrar sesión 
Route::get('logout', function()
{
   Auth::logout();
   return Redirect::to('/');
});


//ruta para el controlador de login y registro de Usuarios
Route::controller('users', 'UsersController');

//ruta para el controlador de facturas de venta
Route::controller('phones', 'PhonesController');

//ruta para el controlador de los contactos
Route::controller('contacts', 'ContactsController');
