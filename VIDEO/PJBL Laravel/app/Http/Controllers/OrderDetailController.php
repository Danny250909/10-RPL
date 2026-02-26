<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Http\Requests\StoreOrderDetailRequest;
use App\Http\Requests\UpdateOrderDetailRequest;

// class OrderDetailController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        // $details = OrderDetail::join('orders', 'order_details.idorder', '=', 'orders.idorder')
        //              ->join('menus', 'order_details.idmenu', '=', 'menus.idmenu')
        //              ->join('pelanggans', 'orders.idpelanggan', '=', 'pelanggans.idpelanggan')
        //              ->select(['order_details.*', 'orders.*', 'menus.*', 'pelanggans.*'])
        //              ->paginate(1);
        // return view('Backend.detail.select', ['details' => $details]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request)
    // {
        // $tglmulai = $request->tglmulai;
        // $tglakhir = $request->tglakhir;

        // $details = OrderDetail::join('orders', 'order_details.idorder', '=', 'orders.idorder')
        //              ->join('menus', 'order_details.idmenu', '=', 'menus.idmenu')
        //              ->join('pelanggans', 'orders.idpelanggan', '=', 'pelanggans.idpelanggan')
        //              ->whereBetween('orders.tglorder', [$tglmulai, $tglakhir])
        //              ->select(['order_details.*', 'orders.*', 'menus.*', 'pelanggans.*'])
        //              ->paginate(1);
        // return view('Backend.detail.select', ['details' => $details]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreOrderDetailRequest $request)
    // {
    //     OrderDetail::create($request->all());
    //     return redirect()->route('OrderDetail.index')
    //         ->with('success', 'OrderDetail created successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetail  $OrderDetail
     * @return \Illuminate\Http\Response
     */
    // public function show(OrderDetail $OrderDetail)
    // {
    //     return view('OrderDetail.show', compact('OrderDetail'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderDetail  $OrderDetail
     * @return \Illuminate\Http\Response
     */
    // public function edit(OrderDetail $OrderDetail)
    // {
    //     return view('OrderDetail.edit', compact('OrderDetail'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderDetailRequest  $request
     * @param  \App\Models\OrderDetail  $OrderDetail
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateOrderDetailRequest $request, OrderDetail $OrderDetail)
    // {
    //     $OrderDetail->update($request->all());
    //     return redirect()->route('OrderDetail.index')
    //         ->with('success', 'OrderDetail updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $OrderDetail
     * @return \Illuminate\Http\Response
     */
//     public function destroy(OrderDetail $OrderDetail)
//     {
//         $OrderDetail->delete();
//         return redirect()->route('OrderDetail.index')
//             ->with('success', 'OrderDetail deleted successfully.');
//     }
// }