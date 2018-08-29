<?php
class UsersController extends BaseController
{

    public function postAuth()
    {
        $uri=Input::get('uri');
        //get POST data
        $userdata = array(
            'email' => strtolower(Input::get('email')),
            'password' => Input::get('password'),
        );

        $recordar=false;
        if(filter_var(Input::get('recuerdame'), FILTER_VALIDATE_BOOLEAN)) $recuerdame=true;

        if(Auth::attempt($userdata, $recordar))
        {
            if(Auth::user()->eliminado==1)
            {
                Auth::user()->habilitarCuenta();
            }
            if($uri!="")
                return Redirect::to($uri);
            else return Redirect::to("/");
        }
        else
        {
            return Redirect::to('/')->with(array('login_errors' => true, 'uri' => $uri));
        }
    }
}