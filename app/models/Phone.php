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

class Phone extends Eloquent {

	//relacion para saber el contacto dueño de este telefono
	public function contact()
    {
        return $this->hasMany("Contact");
    }

    //relacion para saber el contacto dueño de este telefono
	public function type_phone()
    {
        return $this->belongsTo("TypePhone");
    }
}