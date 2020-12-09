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
        $currentPage = $this->request->getVar('page_data_pinjam') ? $this->request->getVar('page_data_pinjam') : 1;
        $data_pinjam = $this->pinjamModel->findAll();
        $data=[
            'title'=>'Daftar Peminjaman',
            'data_pinjam' => $this->pinjamModel->paginate(10, 'data_pinjam'),
            'pager' => $this->pinjamModel->pager,
            'currentPage' => $currentPage
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
            'nama'=>'required',
            'judul'=>'required',
            'alamat'=>'required',
            'telepon'=>'required'
            

        ])){
            return redirect()->to('/pinjam/create')->withInput();

        }
       $this->pinjamModel->save([
           'nama'=>$this->request->getVar('nama'),
           'judul'=>$this->request->getVar('judul'),
           'alamat'=>$this->request->getVar('alamat'),
           'telepon'=>$this->request->getVar('telepon'),
       ]);
       
       return redirect()->to('/pinjam');
	}

    public function delete($id)
    {   $this->pinjamModel->delete($id);
        return redirect()->to('/pinjam');
    }
    

    public function edit($id){
        session();
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM data_pinjam WHERE id='$id'");
        $data_pinjam = $query->getResultArray();
        $data=[
            'title'=>'Form Edit Peminjaman',
            'id'=>'$id',
            'data_pinjam' => $data_pinjam
            
        ];
       
        echo view('layout/header',$data);
        echo view('pinjam/edit',$data);
        echo view('layout/footer');

    }

    public function update($id){
        $this->pinjamModel->save([

            'id'=> $id,
            'nama'=>$this->request->getVar('nama'),
            'judul'=>$this->request->getVar('judul'),
            'alamat'=>$this->request->getVar('alamat'),
            'telepon'=>$this->request->getVar('telepon'),
        ]);
        return redirect()->to('/pinjam');
    }

}
