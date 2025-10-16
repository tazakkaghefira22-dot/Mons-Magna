<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'ProductID';
    protected $allowedFields = ['NamaProduk', 'JenisProduk', 'Model', 'Ukuran', 'Harga'];
    protected $useTimestamps = false;
}
