<?php 
namespace App\Http\Controllers;
use App\Models\OderDetail;
use App\Http\Requests\StoreOderDetailRequest;
use App\Http\Requests\UpdateOderDetailRequest;

// class OderDetailController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        // $OderDetail = OderDetail::all();
        // return view('OderDetail.index', compact('OderDetail'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // return view('OderDetail.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreOderDetailRequest $request)
    // {
    //     OderDetail::create($request->all());
    //     return redirect()->route('OderDetail.index')
    //         ->with('success', 'OderDetail created successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OderDetail  $OderDetail
     * @return \Illuminate\Http\Response
     */
    // public function show(OderDetail $OderDetail)
    // {
    //     return view('OderDetail.show', compact('OderDetail'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OderDetail  $OderDetail
     * @return \Illuminate\Http\Response
     */
    // public function edit(OderDetail $OderDetail)
    // {
    //     return view('OderDetail.edit', compact('OderDetail'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOderDetailRequest  $request
     * @param  \App\Models\OderDetail  $OderDetail
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateOderDetailRequest $request, OderDetail $OderDetail)
    // {
    //     $OderDetail->update($request->all());
    //     return redirect()->route('OderDetail.index')
    //         ->with('success', 'OderDetail updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OderDetail  $OderDetail
     * @return \Illuminate\Http\Response
     */
//     public function destroy(OderDetail $OderDetail)
//     {
//         $OderDetail->delete();
//         return redirect()->route('OderDetail.index')
//             ->with('success', 'OderDetail deleted successfully.');
//     }
// }