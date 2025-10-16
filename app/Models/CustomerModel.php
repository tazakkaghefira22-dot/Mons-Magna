<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'Customers';
    protected $primaryKey = 'CustomerID';
    protected $allowedFields = ['Nama', 'Email', 'NoTelp', 'Alamat'];
    protected $useTimestamps = false;
}
