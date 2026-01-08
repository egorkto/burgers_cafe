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
        $currencies = Currency::all();
        return view("currency.index", compact("currencies"));
    }

    public function create()
    {
        return view('currency.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $currency = currency::query()->create([
            'id' => $validated['id'],
            'name' => $validated['name'],
            'exchange_rate' => $validated['exchange_rate'],
        ]);

        return redirect(route('currency'));
    }

    public function show(Currency $currency)
    {
        return view("currency.show", compact('currency'));
    }

    public function edit(Currency $currency)
    {
        return view("currency.edit", compact('currency'));
    }

    public function update(UpdateRequest $request, Currency $currency)
    {
        $validated = $request->validated();
        $currency->update([
            'id' => $validated['id'],
            'name' => $validated['name'],
            'exchange_rate' => $validated['exchange_rate'],
        ]);
        return redirect(route('currency.show', $currency->id));
    }

    public function delete(Currency $currency)
    {
        $currency->delete();
        return redirect(route('currency'));
    }
}
