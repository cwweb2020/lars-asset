<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $orders=order::with('products')->get();

        // ->orderby('id','desc')
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
       
        return view('order.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $taxes= request('taxes');
        $status= request('status');
        $comment= request('comment');

        order::create([
            'taxes'=> $taxes,
            'status'=> $status,
            'comment'=> $comment
        ]);

      // order::create()->all();

         return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::with('products')->find($id); 
        $products = $order->products;  
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price;
        } 
        return view('order.show', compact(['order', 'total']));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        order::destroy($id);
        
        return redirect()->route('order.index');
    }
}
