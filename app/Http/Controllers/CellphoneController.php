<?php

namespace App\Http\Controllers;

use App\Enums\Brands;
use App\Enums\ProcesorBrands;
use App\Enums\Resolutions;
use App\Enums\RAMMemory;
use App\Enums\Storage;
use Illuminate\Http\Request;
use App\Models\Cellphone;

class CellphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('cellphone.index', [
            'cellphones' => Cellphone::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cellphone.create', [
            'brands' => Brands::cases(),
            'resolutions' => Resolutions::cases(),
            'procesorBrands' => ProcesorBrands::cases(),
            'RAMMemories' => RAMMemory::cases(),
            'storages' => Storage::cases()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $cellphone = $request->all();
        $cellphone['descuento'] = $request->descuento / 100;
        Cellphone::create($cellphone);

        return redirect()->route('cellphones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cellphone $cellphone) {
        return view('cellphone.edit', [
            'cellphone' => $cellphone,
            'brands' => Brands::cases(),
            'resolutions' => Resolutions::cases(),
            'procesorBrands' => ProcesorBrands::cases(),
            'RAMMemories' => RAMMemory::cases(),
            'storages' => Storage::cases()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cellphone $cellphone) {
        $request['descuento'] = $request->descuento / 100;
        $cellphone->update($request->all());

        return redirect()->route('cellphones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cellphone $cellphone)
    {
        $cellphone->delete();
        return back();
    }
}
