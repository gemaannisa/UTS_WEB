<?php

namespace App\Models;
use CodeIgniter\Model;

class Bukumodel extends Model{

    protected $table ='Buku';
    protected $allowedFields = ['nomor','nama','deskripsi','stok','penerbit'];

    public function search($keyword){
        $builder = $this->table('buku');
        $builder->like('nama', '$keyword');
        return $builder;
        // return $this->table('buku')->like('nama', '$keyword');
    }
}