<?php

namespace App\Controllers;

use App\Models\MaterialModel;
use CodeIgniter\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        $model = new MaterialModel();
        $data['materials'] = $model->findAll();
        return view('inventory_dashboard', $data);
    }

    public function updateStock($id)
    {
        $model = new MaterialModel();
        $data = [
            'StokBahan' => $this->request->getPost('stok')
        ];
        $model->update($id, $data);
        return redirect()->to('/inventory');
    }
}
