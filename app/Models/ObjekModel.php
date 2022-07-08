<?php

namespace App\Models;

use CodeIgniter\Model;

class ObjekModel extends Model
{
   protected $table  = 'objekwisata';
   protected $primaryKey = 'id';


   protected $useAutoIncrement = true;
   protected $allowedFields = ['nama', 'kode', 'harga_anak', 'harga_dewasa', 'image'];

}
