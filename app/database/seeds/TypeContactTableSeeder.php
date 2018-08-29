<?php 
/** 
*
* @CMYM Contactr. TypeContactTableSeeder.php” 
* @versión: 1.0.0     @modificado: 28 de Agosto del 2018 
* @autor última modificación: Mairon Piedrahita 
* 
*/

class TypeContactTableSeeder extends Seeder{
    public function run()
    {
        DB::table('type_contact')->delete();

        TypeContact::create(array(
            'name' => 'Posibles Clientes',
            'description' => 'Posibles clientes de la empresa',
            'alias' => 'possible-clients'
        ));

        TypeContact::create(array(
            'name' => 'Posibles Proveedores',
            'description' => 'Posibles proveedores de la empresa',
            'alias' => 'possible-providers'
        ));

        TypeContact::create(array(
            'name' => 'Clientes',
            'description' => 'Clientes de la empresa',
            'alias' => 'clients'
        ));

        TypeContact::create(array(
            'name' => 'Proveedores',
            'description' => 'Clientes de la empresa',
            'alias' => 'providers'
        ));
    }
}