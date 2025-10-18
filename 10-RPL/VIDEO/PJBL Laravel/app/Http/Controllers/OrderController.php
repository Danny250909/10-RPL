<?php 
namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

// class OrderController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
         // return view('Backend.order.select');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // return view('Order.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreOrderRequest $request)
    // {
    //     Order::create($request->all());
    //     return redirect()->route('Order.index')
    //         ->with('success', 'Order created successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    // public function show(Order $Order)
    // {
    //     return view('Order.show', compact('Order'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    // public function edit(Order $Order)
    // {
    //     return view('Order.edit', compact('Order'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateOrderRequest $request, Order $Order)
    // {
    //     $Order->update($request->all());
    //     return redirect()->route('Order.index')
    //         ->with('success', 'Order updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
//     public function destroy(Order $Order)
//     {
//         $Order->delete();
//         return redirect()->route('Order.index')
//             ->with('success', 'Order deleted successfully.');
//     }
// }