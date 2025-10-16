<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'Users';
    protected $primaryKey = 'UserID';
    protected $allowedFields = ['Username', 'Password', 'NamaLengkap', 'Email', 'Role', 'TanggalDaftar'];
    protected $useTimestamps = false;
}
