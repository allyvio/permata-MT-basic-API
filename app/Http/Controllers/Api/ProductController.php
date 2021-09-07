<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        $data = Product::all();
        return response()->json([
            'data' => $data,
            'pesan' => 'data berhasil di tampilkan'
        ]);
    }
    public function getProductById($id)
    {
        $data = Product::find($id);
        return response()->json([
            'data' => $data,
            'pesan' => 'data product berhasil ditemukan'
        ]);
    }
}
