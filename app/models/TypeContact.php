<?php
/** 
*
* @CMYM contacts. Phone.php
* @versión: 1.0.0     @modificado: 28 de Agosto del 2018
* @autor última modificación: Mairon Piedrahita
* 
*/

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class TypeContact extends Eloquent {

    protected $table="type_contact";
	 
    //relacion para conocer los contactos que le pertenecen a este tipo de contacto
   public function contacts()
    {
        return $this->hasMany("Contact", "type_contact_id");
    }

}