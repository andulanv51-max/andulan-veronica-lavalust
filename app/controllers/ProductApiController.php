<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductApiController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('api');
    }

    // GET - Display all products
    public function index()
    {
        $this->api->require_method('GET');

        $products = $this->db->table('products')
                             ->get_all();

        $this->api->respond($products);
    }

    // POST - Add product
    public function create()
    {
        $this->api->require_method('POST');

        $input = $this->api->body();

        $this->db->table('products')->insert([
            'product_name' => $input['product_name'],
            'description'  => $input['description'],
            'price'        => $input['price'],
            'quantity'     => $input['quantity'],
            'created_at'   => date('Y-m-d H:i:s')
        ]);

        $this->api->respond([
            'message' => 'Product created successfully'
        ], 201);
    }

    // PUT - Update product
    public function update($id)
    {
        $this->api->require_method('PUT');

        $input = $this->api->body();

        $this->db->table('products')
                 ->where('id', $id)
                 ->update([
                     'product_name' => $input['product_name'],
                     'description'  => $input['description'],
                     'price'        => $input['price'],
                     'quantity'     => $input['quantity']
                 ]);

        $this->api->respond([
            'message' => 'Product updated successfully'
        ]);
    }

    // DELETE - Delete product
    public function delete($id)
    {
        $this->api->require_method('DELETE');

        $this->db->table('products')
                 ->where('id', $id)
                 ->delete();

        $this->api->respond([
            'message' => 'Product deleted successfully'
        ]);
    }
}