<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'Sharp TV',
                        'deskripsi_produk'    => 'Tv 21"'
                    ],
                    [
                        'nama_produk' => 'AC Panasonic',
                        'deskripsi_produk'    => 'Panasonic AC 2pk'
                    ],
                ];

                // Using Query Builder
                $this->db->table('produk')->insertBatch($data);
        }
}