<?php namespace App\Controllers;

class Detail extends BaseController
{
    public function kulkas()
	{
        return view ('produk/kulkas');
    }

    public function washer()
	{
        return view ('produk/washer');
    }

    public function kamera()
	{
        return view ('produk/kamera');
    }
}