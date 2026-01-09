<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\IndexRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    public function index(IndexRequest $request)
    {
        $validated = $request->validated();
        $query = Product::query();
        if ($search = $validated['search'] ?? null) {
            $query->where('name', 'like', "%{$search}%");
        }
        if ($sortOption = $validated['sort_by'] ?? null) {
            $columnName = '';
            $direction = isset($validated['desc_sort']) ? 'desc' : 'asc';
            switch ($sortOption) {
                case 'name':
                    $columnName = 'Name';
                    break;
                case 'price':
                    $columnName = 'Price';
                    break;
                case 'updated':
                    $columnName = 'Updated_at';
                    break;
                case 'created':
                default:
                    $columnName = 'Created_at';
                    break;
            }
            $query->orderBy($columnName, $direction);
        }
        if ($category_id = $validated['category_id'] ?? null) {
            $query->where('category_id', $category_id);
        }
        $products = $query->paginate(15);
        $categories = Category::all();
        return view("product.index", compact("products", 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $fileName = null;
        if (isset($validated['image'])) {
            $uploaded = $validated['image'];
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
            'category_id' => $validated['category_id'],
        ]);

        return redirect(route('product'));
    }

    public function show(Product $product)
    {
        $category = $product->category;
        return view("product.show", compact('product', 'category'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view("product.edit", compact('product', 'categories'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $validated = $request->validated();
        $image = null;
        if (isset($validated['image'])) {
            $image = $validated['image'];
        } else {
            $image = $product->image;
        }
        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'image' => $image,
            'category_id' => $validated['category_id'],
        ]);
        return redirect(route('product.show', $product->id));
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('product'));
    }
}
