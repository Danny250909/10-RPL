<?php 
namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;

// class PelangganController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        // $Pelanggan = Pelanggan::all();
        // return view('Pelanggan.index', compact('Pelanggan'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // return view('Pelanggan.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePelangganRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StorePelangganRequest $request)
    // {
    //     Pelanggan::create($request->all());
    //     return redirect()->route('Pelanggan.index')
    //         ->with('success', 'Pelanggan created successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    // public function show(Pelanggan $Pelanggan)
    // {
    //     return view('Pelanggan.show', compact('Pelanggan'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pelanggan $Pelanggan)
    // {
    //     return view('Pelanggan.edit', compact('Pelanggan'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelangganRequest  $request
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdatePelangganRequest $request, Pelanggan $Pelanggan)
    // {
    //     $Pelanggan->update($request->all());
    //     return redirect()->route('Pelanggan.index')
    //         ->with('success', 'Pelanggan updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
//     public function destroy(Pelanggan $Pelanggan)
//     {
//         $Pelanggan->delete();
//         return redirect()->route('Pelanggan.index')
//             ->with('success', 'Pelanggan deleted successfully.');
//     }
// }