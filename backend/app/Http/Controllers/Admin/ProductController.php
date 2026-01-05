<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("product.index", compact("products"));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $fileName = null;
        if ($uploaded = $validated['image']) {
            $fileName = time() . rand(0, 99999) . 'logo' . "." . $uploaded->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($uploaded->getRealPath());
            $image->resize(900, 600);
            Storage::disk('public')->put('product/images/' . $fileName, $image->toPng());
        }
        $product = Product::query()->create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'image' => $fileName,
        ]);

        return redirect(route('product'));
    }

    public function show(Product $product)
    {
        return view("product.show", compact('product'));
    }

    public function edit(Product $product)
    {
        return view("product.edit", compact($product));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $validated = $request->validated();
        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'currencyId' => $validated['currencyId'],
        ]);
        return redirect(route('product.indexs'));
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
