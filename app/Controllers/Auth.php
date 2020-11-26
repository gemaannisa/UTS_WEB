<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		return view ('auth/login');
    }
    
    public function aksi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="gemaannisa05@gmail.com"&&$password=="admin")
        {
            return redirect()->to('/AdminController/index');
        }else{
            return redirect()->to('/AdminController/product');
        }
    }
    
    
    public function register(){
        return view('auth/register');
    }

    public function admin(){
        return view('auth/admin');
    }
    public function about(){
        return view('about/index');
    }

    

    public function detail()
	{
		return redirect()->to('/detail/kulkas');
    }
}