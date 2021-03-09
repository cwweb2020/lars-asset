@extends('templates.template')


@section('content')

  
 <section class="listadototal container p-4">
     <div class="listadowraper row p-4">
         <h2>Listado de Ordenes</h2>
         <div class="box1 col-6 p-3 mt-4">
           

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Taxes</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>

         @foreach ($orders as $order)
                  <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->comment}}</td>
                    <td>{{$order->taxes}}</td>
                    <td>{{$order->status}}</td>
                  </tr>
         @endforeach 

                </tbody>
              </table>

         </div>
         <div class="box2">

         </div>
     </div>
 </section>
   




   
 @endsection