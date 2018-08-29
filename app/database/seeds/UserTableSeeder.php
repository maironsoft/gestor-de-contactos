<?php 
/** 
*
* @Sian Manager. UserTableSeeder.php” 
* @versión: 1.0.0     @modificado: 19 de Julio del 2016 
* @autor última modificación: Mairon Piedrahita 
* 
*/

class UserTableSeeder extends Seeder{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Luis Alfonso Angarita',
            'email' =>'gerente@cmym.com',
            'password' => Hash::make("123456")
        ));
    }
}