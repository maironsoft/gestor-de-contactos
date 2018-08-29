<?php

class ContactsController extends BaseController
{

	public function __construct()
    {
        $this->beforeFilter('auth');  //bloqueo de acceso
    }

    //lsta de contactos
    public function getIndex()
    {
    	$contactos= Contact::orderBy('created_at', 'desc')
        ->paginate(15);

        $cant_add=$contactos->count();

        if (Request::ajax()) {
            return Response::json(View::make('includes.tablas.tabla-contactos')->with(
                array(
                    'contactos' => $contactos,
                    'cant_add' => $cant_add,
                    'type_contact' => 'Contactos'
            ))->render());
        }

        return View::make('contacts.index')->with(
            array(
                'contactos' => $contactos,
                'cant_add' => $cant_add,
                'type_contact' => 'Contactos'
        ));
    }

    //lsta de contactos
    public function getType($tipo)
    {
        $type_contact=TypeContact::where("alias", $tipo)->first();

        $contactos= Contact::where("type_contact_id", $type_contact->id)->orderBy('created_at', 'desc')
        ->paginate(15);

        $cant_add=$contactos->count();

        if (Request::ajax()) {
            return Response::json(View::make('includes.tablas.tabla-contactos')->with(
                array(
                    'contactos' => $contactos,
                    'cant_add' => $cant_add,
                    'type_contact' => $type_contact
            ))->render());
        }

        return View::make('contacts.index')->with(
            array(
                'contactos' => $contactos,
                'cant_add' => $cant_add,
                'type_contact' => $type_contact
        ));
    }



    //lsta de asistentes, como parametro envío el tipo de asistente $tipo
    public function getNew()
    {
        $tipos_contacto = TypeContact::all();
        $tipos_telefonos= TypePhone::all();
        return View::make('contacts.form-contacto')->with(
            array(
                'tipos_contacto' => $tipos_contacto,
                'tipos_telefonos' => $tipos_telefonos
        ));
    }

    public function getUpdate($id)
    {
        $tipos_contacto = TypeContact::all();
        $tipos_telefonos= TypePhone::all();
        $contacto=Contact::find($id);
        return View::make('contacts.form-contacto')->with(
            array(
                'tipos_contacto' => $tipos_contacto,
                'tipos_telefonos' => $tipos_telefonos,
                'contacto' => $contacto
        ));
    }

    public function postSave($id=0)
    {
        if($id==0)
            $contacto= new Contact;
        else
            $contacto= Contact::find($id);

        $contacto->name=Input::get('nombre');
        $contacto->address=Input::get('direccion'); 
        $contacto->email=Input::get('email');
        $contacto->type_contact_id=Input::get('categoria_producto_id');
        $contacto->city=Input::get('ciudad');
        $contacto->state=Input::get('departamento');
        $contacto->country=Input::get('pais');

        $cantidad_telefonos=Input::get('cantidad-telefonos');

        if($contacto->save())
        {
            if(Input::hasFile('picture')) {
                //return "si tiene";
                $img=Input::file('picture');
                $format=File::extension(Input::file("picture")->getClientOriginalName());
                $contacto->picture="contact-".$contacto->id.".".$format."?v=".rand();
                $contacto->save();
                $img->move('dist/img/contacts',"contact-".$contacto->id.".".$format);
            }
            for($i=1; $i<=$cantidad_telefonos; $i++){
                $telefono= new Phone();
                $telefono->phone=Input::get('telefono'.$i);
                $telefono->contact_id=$contacto->id;
                $telefono->type_phone_id=1;
                $telefono->save();
            }

            if($id==0)
                return Redirect::to('/contacts/new')->with(
                    array(
                        'save_ok' => 'ok'
                    )
                );
            else
                return Redirect::to('/contacts/update/'.$id)->with(
                    array(
                        'save_ok' => 'ok'
                    )
                );
        }
    }

    public function getProfile($id){
        $contacto=Contact::find($id);
        return View::make('contacts.profile-contact')->with(
            array(
                'contacto' => $contacto
        ));
    }
}