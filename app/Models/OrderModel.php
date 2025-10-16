<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'Orders';
    protected $primaryKey = 'OrderID';
    protected $allowedFields = ['CustomerID', 'Tanggal', 'StatusOrder', 'TotalHarga'];
    protected $useTimestamps = false;
}
