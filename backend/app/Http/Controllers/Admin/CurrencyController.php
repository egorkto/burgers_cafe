<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Currency\StoreRequest;
use App\Http\Requests\Currency\UpdateRequest;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        return view("currency");
    }

    public function create()
    {
        return view('currency.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        $currency = Currency::query()->create([
            'id' => $validated['id'],
            'name' => $validated['name'],
        ]);

        return redirect(route('currency.index'));
    }

    public function show(Currency $currency)
    {
        return view("currencys.show", compact($currency));
    }

    public function edit(Currency $currency)
    {
        return view("currencys.edit", compact($currency));
    }

    public function update(UpdateRequest $request, Currency $currency)
    {
        $validated = $request->validated();
        $currency->update([
            'id' => $validated['id'],
            'name' => $validated['name'],
        ]);
        return redirect(route('currency.index'));
    }

    public function delete(Currency $currency)
    {
        $currency->delete();
        return redirect(route('currency.index'));
    }
}
