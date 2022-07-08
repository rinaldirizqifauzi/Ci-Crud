<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';
   
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nofak', 'kode', 'jumlah_anak', 'jumlah_dewasa']; 


    public function getAll()
    {
        $builder = $this->db->table('transaksi');
        $builder->join('objekwisata', 'objekwisata.id = transaksi.id');
        $query = $builder->get();
        
        return $query->getResult();
    }
}
