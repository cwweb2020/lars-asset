@extends('templates.template')


@section('content')

  
 <section class="listadototal container p-4">
     <div class="listadowraper row p-4">
         <h2>Listado de Ordenes</h2> <a href="{{route('order.create')}}" class="btn btn-dark col-4 py-2 mt-3"> Crear Orden</a>
         <div class="box1 col-12 p-3 mt-4">
           

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Impuesto</th>
                    <th scope="col">Status</th>
                    <th scope="col" style="min-width= 92px">Fecha</th>
                  </tr>
                </thead>
                <tbody>

         @foreach ($orders as $order)
                  <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->comment}}</td>
                    <td>{{$order->taxes}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{date('d-m-Y', strtotime($order->created_at))}}</td>
                     <td>
                           <form action="{{url('/order',$order)}}" method="POST">
                               @csrf
                               @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                           </form>                         
              
                         <a href="{{url('/order/'.$order->id)}}" class="btn btn-success mt-2"> Detalle </a>
                      

                     </td>
                   
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