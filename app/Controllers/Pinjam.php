<?php namespace App\Controllers;
use \App\Models\Pinjammodel;

class Pinjam extends BaseController
{
    protected $pinjamModel;
    protected $data_pinjam;
    public function __construct(){
        $this->pinjamModel = new Pinjammodel();

    }
	public function index()
	{
        $curretPage = $this->request->getVar('page_pinjam') ? $this->request->getVar('page_pinjam') : 1;
        //$data_pinjam = $this->pinjamModel->findAll();
        $data=[
            'title'=>'Daftar Peminjaman',
            'data_pinjam' => $this->pinjamModel->paginate(10, 'data_pinjam'),
            'pager' => $this->pinjamModel->pager,
            'currentPage' => $curretPage
            //'pinjam'=>$this->pinjamModel->findAll(),
        ];
       
               


        echo view('layout/header',$data);
        echo view('layout/navbar');
        echo view('pinjam/index',$data);
        echo view('layout/footer');
    }
    
    public function create()
	{
        session();
        $data=[
            'title'=>'Daftar Peminjaman',
        ];
       
        echo view('layout/header',$data);
        echo view('pinjam/create',$data);
        echo view('layout/footer');
	}
    public function save()
	{   

    
        if(!$this->validate([
            'nama'=>'required|is_unique[buku.nama]',
            'judul'=>'required',
            'alamat'=>'required',
            'telepon'=>'required'
            

        ])){
            return redirect()->to('/pinjam/create')->withInput();

        }
       $this->bukuModel->save([
           'nama'=>$this->request->getVar('nama'),
           'judul'=>$this->request->getVar('stok'),
           'alamat'=>$this->request->getVar('penerbit'),
           'telepon'=>$this->request->getVar('deskripsi'),
       ]);
       
       return redirect()->to('/pinjam');
	}

    public function delete($id_pinjam)
    {   $this->bukuModel->delete($id_pinjam);
        return redirect()->to('/pinjam');
      

    }

    public function edit($id_pinjam){
        session();
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM data_pinjam WHERE id_pinjam='$id_pinjam'");
        $data_pinjam = $query->getResultArray();
        $data=[
            'title'=>'Form Edit Peminjaman',
            'id_pinjam'=>'$id_pinjam',
            'data_pinjam' => $data_pinjam
            
        ];
       
        echo view('layout/header',$data);
        echo view('pinjam/edit',$data);
        echo view('layout/footer');

    }
    public function update($id_pinjam){
        $this->pinjamModel->save([

            'id_pinjam'=>$this->request->getVar('id_pinjam'),
            'nama'=>$this->request->getVar('nama'),
            'judul'=>$this->request->getVar('judul'),
            'alamat'=>$this->request->getVar('alamat'),
            'telepon'=>$this->request->getVar('telepon'),
        ]);
        return redirect()->to('/pinjam');
    }
}
