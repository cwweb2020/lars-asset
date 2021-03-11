@extends('templates.template')


@section('content')

     <div class="container">
         

         <h2 class="text-center my-4 py-4">
             Crear una nueva Orden
         </h2>
     </div>
     <div class="_back">
         <a class="btn btn-dark" href="{{route('order.index')}}">Volver</a>
        
     </div>
 <section class="container p-4 m-4">
    <form action="{{url('/order')}}" method="POST" class="formdata ms-4">
   
        @csrf    
         <h3>Crear Orden</h3>
        <input type="number" name="taxes" required placeholder="Impuestos"> <br>
    
        <input type="number" name="status" required placeholder="Estatus"><br>
        
        <textarea name="comment" placeholder="Comentario*" cols="20" rows="4"></textarea><br>

        <input type="text" hidden id="product_list" value="" name="products">
   
       
    <button type="submit" class="btn btn-success">GUARDAR</button>

    </form> 
    <div class="productos">
        @foreach ($productos  as $product)

        <div style="border: 1px solid black">
            <p>Articulo: {{$product->name}}  Precio $ {{$product->price}} 
                 <input type="checkbox"    class="ch" id="{{$product->id}}"></p>          
        </div>
            
        @endforeach
     </div>  
    </form>  
 </section>
   
 @endsection
 @section('scripts')
 <!-- SCRIPTS -->
 <script>
     const checks = document.getElementsByClassName('ch');

     let productos_seleccionados = [];
     let product_list = document.getElementById('product_list');

    for (let i = 0; i < checks.length; i++) {
        checks[i].addEventListener('change', (e) =>{
            productos_seleccionados.push(e.target.id)
            product_list.setAttribute('value', productos_seleccionados.toString())
        })
        
    }

 </script>

     
 @endsection