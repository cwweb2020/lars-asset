<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF($id){

        $order = order::with('products')->find($id); 
        $products = $order->products;  
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price;
        } 
        $pdf=\PDF::loadView('nuevopdf',compact(['order', 'total']));
        return $pdf->download('prueba.pdf');
    }
}
