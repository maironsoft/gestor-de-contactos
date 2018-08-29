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

class TypePhone extends Eloquent {
	protected $table="type_phone";

	//relacion para saber los telefonos que pertenecen a este tipo
	public function phone()
    {
        return $this->hasMany("Phone");
    }
}