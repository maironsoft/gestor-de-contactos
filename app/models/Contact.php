<?php
/** 
*
* @CMYM contacts. Contact.php 
* @versión: 1.0.0     @modificado: 28 de Agosto del 2018 
* @autor última modificación: Mairon Piedrahita
* 
*/

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Contact extends Eloquent {

	///relacion para saber los diferentes telefonos del contacto
	public function phones()
    {
        return $this->hasMany("Phone");
    }

    public function type_contact()
    {
        return $this->belongsTo("TypeContact", "type_contact_id");
    }

}