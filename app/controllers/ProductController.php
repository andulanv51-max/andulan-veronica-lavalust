<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function index()
    {
        $this->call->model('ProductModel');

        $products = $this->ProductModel->all();

        $this->call->view('products', ['products' => $products]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            ];

            $this->call->model('ProductModel');
            $this->ProductModel->insert($data);

            header('Location: ' . site_url('products'));
            exit;
        }

        $this->call->view('product_create');
    }

    public function edit($id)
    {
        $this->call->model('ProductModel');

        $product = $this->ProductModel->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            ];

            $this->ProductModel->update($id, $data);

            header('Location: ' . site_url('products'));
            exit;
        }

        $this->call->view('product_edit', ['product' => $product]);
    }

    public function delete($id)
    {
        $this->call->model('ProductModel');

        $this->ProductModel->delete($id);

        header('Location: ' . site_url('products'));
        exit;
    }
}