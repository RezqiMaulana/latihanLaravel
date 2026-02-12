<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('produk.produk');
    }

    public function show($id) {
        return view('produk.show', ['id' => $id]);
    }
}
