<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('product_catalog', $data);
    }

    public function show($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('product_detail', $data);
    }
}
