<?php 
/** 
*
* @CMYM contacts. TypePhoneTableSeeder.php” 
* @versión: 1.0.0     @modificado: 28 de Agosto del 2018 
* @autor última modificación: Mairon Piedrahita 
* 
*/

class TypePhoneTableSeeder extends Seeder{
    public function run()
    {
        DB::table('type_phone')->delete();

        TypePhone::create(array(
            'name' => 'Línea Fija',
            'description' => 'Telefono de la oficina'
        ));

        TypePhone::create(array(
            'name' => 'Celular',
            'description' => 'Celular de la oficina'
        ));

        TypePhone::create(array(
            'name' => 'Fax',
            'description' => 'Fax de la oficina'
        ));
    }
}