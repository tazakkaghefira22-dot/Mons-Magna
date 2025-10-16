<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\CustomerModel;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll();
        return view('order_list', $data);
    }

    public function create()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('order_form', $data);
    }

    public function store()
    {
        $orderModel = new OrderModel();
        $customerModel = new CustomerModel();

        // Save customer
        $customerData = [
            'Nama' => $this->request->getPost('nama'),
            'Email' => $this->request->getPost('email'),
            'NoTelp' => $this->request->getPost('notelp'),
            'Alamat' => $this->request->getPost('alamat')
        ];
        $customerId = $customerModel->insert($customerData);

        // Save order
        $orderData = [
            'CustomerID' => $customerId,
            'Tanggal' => date('Y-m-d'),
            'StatusOrder' => 'Proses',
            'TotalHarga' => $this->request->getPost('total_harga')
        ];
        $orderId = $orderModel->insert($orderData);

        // Redirect to order details or success page
        return redirect()->to('/orders/' . $orderId);
    }

    public function show($id)
    {
        $model = new OrderModel();
        $data['order'] = $model->find($id);
        return view('order_detail', $data);
    }
}
