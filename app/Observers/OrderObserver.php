<?php

namespace App\Observers;

use App\Models\order;
use App\Models\Log;
//---------
use App\Mail\OrderMailable;
use Illuminate\Support\Facades\Mail;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Models\order  $order
     * @return void
     */
    public function created(order $order)
    {
        $log = new Log();
        $log->event = "New Order created";
        $log->save();
        //.....
        $correo = new OrderMailable;

        Mail::to('cliente@cliente.com')->send($correo);
    }

   
    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\order  $order
     * @return void
     */
    public function deleted(order $order)
    {
        $log = new Log();
        $log->event = "Order deleted";
        $log->save();
        //------ 
        $correo = new OrderMailable;

        Mail::to('cliente@cliente.com')->send($correo);
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\order  $order
     * @return void
     */
    public function restored(order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\order  $order
     * @return void
     */
    public function forceDeleted(order $order)
    {
        //
    }
}
