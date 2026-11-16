<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLaptopRequest;
use App\Models\Laptop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = Laptop::all();

        return view('list-laptop', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-laptop');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Laptop::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'processor' => $request->processor,
            'ram' => $request->ram,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop): View
    {
        return view('form-laptop', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaptopRequest $request, Laptop $laptop): RedirectResponse
    {
        $laptop->update($request->validated());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Laptop::destroy($request->id);

        return redirect('/');
    }
}
