@extends('templates.template')


@section('content')

     <div class="container">
         <h2 class="text-center my-4 py-4">
             Ingrese una nueva Orden
         </h2>
     </div>
     <div class="_back">
         <a class="btn btn-dark" href="{{route('order.index')}}">Volver</a>
        
     </div>
 <section class="container p-4 m-4">
    <form action="{{url('/order')}}" method="POST" class="formdata ms-4">
   
        @csrf    
         <h3>Ingresar Orden</h3>
        <input type="number" name="taxes" required placeholder="Impuestos"> <br>
    
        <input type="number" name="status" required placeholder="Estatus"><br>
        
        <textarea name="comment" placeholder="Comentario*" cols="20" rows="4"></textarea><br>
   
       
    <button type="submit" class="btn btn-success">GUARDAR</button>
              
    </form>   


 </section>
   




   
 @endsection