<?php

namespace App\Controllers;


class Home extends BaseController{

    public function index(){

        if(session('user') == null ) {

            return redirect()->to('/login');
        }        

        echo   view('common/header');

        return view('home');
       
    }
}


