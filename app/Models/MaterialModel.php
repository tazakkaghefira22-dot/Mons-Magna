<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{
    protected $table = 'Materials';
    protected $primaryKey = 'MaterialID';
    protected $allowedFields = ['NamaBahan', 'Kategori', 'StokBahan', 'MinimumStok', 'HargaSatuan', 'JenisBahan'];
    protected $useTimestamps = false;
}
