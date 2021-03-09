@extends('templates.template')


@section('content')

  
 <section class="container p-4 m-4">
    <form action="{{url('/order')}}" method="POST" class="form form-control">
   
        @csrf    
         <h3>Ingresar Orden</h3>
        <input type="number" name="taxes" required placeholder="Impuestos"> <br>
    
        <input type="number" name="status" required placeholder="Estatus"><br>
        
        <textarea name="comment" placeholder="Comentario*" cols="20" rows="4"></textarea><br>
   
       
    <button type="submit" class="btn btn-success">GUARDAR</button>
              
    </form>   


 </section>
   




   
 @endsection