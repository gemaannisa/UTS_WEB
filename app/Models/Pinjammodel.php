<?php

namespace App\Models;
use CodeIgniter\Model;

class Pinjammodel extends Model{

    protected $table ='data_pinjam';
    protected $allowedFields = ['nama','judul','alamat','telepon'];
}