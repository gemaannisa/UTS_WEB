<?php namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(){
        return view('admin/page');
    }
    public function product(){
        return view('produk/elektronik');
    }
    public function sharp()
	{
        return view ('detail/washer');
    }
}