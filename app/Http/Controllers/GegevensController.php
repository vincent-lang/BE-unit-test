<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\shop;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        return view('gegevens.index', [
            'products' => product::with('shop')->get()
        ]);
    }

    public function createProduct()
    {
        return view('product.create');
    }

    public function storeProduct(product $product, Request $request)
    {
        $validated = $request->validate([
            'shop_id' => 'required',
            'product_name' => 'required',
            'artikel_nr' => 'required',
        ]);

        $product->create($validated);

        return redirect(route('shop.create'));
    }
    public function createShop()
    {
        return view('shop.create');
    }

    public function storeShop(shop $shop, Request $request)
    {
        $validated = $request->validate([
            'shop_name' => 'required',
            'location' => 'required',
        ]);

        $shop->create($validated);

        return redirect(route('gegevens.index'));
    }
}
