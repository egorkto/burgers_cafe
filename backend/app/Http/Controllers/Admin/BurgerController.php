<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Burger\StoreRequest;
use App\Http\Requests\Burger\UpdateRequest;
use App\Models\Burger;

class BurgerController extends Controller
{
    public function index()
    {
        return view("burger.index");
    }

    public function create()
    {
        return view('burger.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        $burger = Burger::query()->create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'currencyId' => $validated['currencyId'],
        ]);

        return redirect(route('burger.index'));
    }

    public function show(Burger $burger)
    {
        return view("burgers.show", compact($burger));
    }

    public function edit(Burger $burger)
    {
        return view("burgers.edit", compact($burger));
    }

    public function update(UpdateRequest $request, Burger $burger)
    {
        $validated = $request->validated();
        $burger->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'currencyId' => $validated['currencyId'],
        ]);
        return redirect(route('burger.indexs'));
    }

    public function delete(Burger $burger)
    {
        $burger->delete();
        return redirect(route('burger.index'));
    }
}
