<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("category.index", compact("categories"));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $category = Category::query()->create([
            'title' => $validated['title'],
        ]);

        return redirect(route('category'));
    }

    public function show(Category $category)
    {
        return view("category.show", compact('category'));
    }

    public function edit(Category $category)
    {
        return view("category.edit", compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $validated = $request->validated();
        $category->update([
            'title' => $validated['title'],
        ]);
        return redirect(route('category.show', $category->id));
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect(route('category'));
    }
}
