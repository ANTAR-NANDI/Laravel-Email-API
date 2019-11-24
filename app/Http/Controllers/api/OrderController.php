<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
       // $orders=Order::where('name','=','AA')->get();
        $error=$orders ? false : true;
        return response()->json([
        'order' => $orders,
        'error' => $error
       
]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Order();
        $obj->name = $request->name;
        $obj->amount = $request->amount;
        $obj->quantity = $request->quantity;
        if($obj->save())
        {
            return response()->json([
            'order' => $obj,
            'msg' => 'successfully Inserted'
        ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders=Order::find($id);
       
         $error=$orders ? false : true;
        return response()->json([
        'order' => $orders,
        'error' => $error
       
]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj=Order::find($id);
         $obj->name = $request->name;
        $obj->amount = $request->amount;
        $obj->quantity = $request->quantity;
         return response()->json([
            'order' => $obj,
            'error'=> false,
            'msg' => 'successfully updated'
            
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
