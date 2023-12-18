<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        return view('gegevens.index', [
            'products' => product::with('shop')->get()
        ]);
    }
}
