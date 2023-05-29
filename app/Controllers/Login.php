<?php

namespace App\Controllers;

use App\Models\UserModel;


class Login extends BaseController{
    
    public function index(){

        echo  view('common/header');
        echo  view('login');
        echo  view('common/footer');
    }
    
    public function do_login(){

        $userModel = new userModel();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user   = $userModel->where('email', $email)->first();

        if(!$user){
            return false;
        }else{
        
            if( $user['id'] > 0  ){

                if (password_verify($password, $user['password'])) {

                   $this->session->set("user", $user);
                    
                 return redirect()->to('/home');

                    
                } else {

                    echo('e-mail or password invalide');
            
                }
            }else{
                echo('e-mail or password invalide');
            }

        }
    }

    public function do_logout(){

        $this->session->remove('user');

        
        return redirect()->to('/login');

    }

}
