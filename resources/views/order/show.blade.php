@extends('templates.template')


@section('content')

<div class="container mt-5">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header">
            <h4> Nro de Orden: {{$order->id}} </h4>
        </div>
        <div class="card-body">
            <ul>
            @foreach ($order->products as $product)
                <li>ID de producto:<span class="separator">/</span> {{$product->id}}</li>
                <li>Nombre producto:<span class="separator">/</span>{{$product->name}}</li>
                <li>Precio: $ <span class="separator">/</span>{{$product->price}}</li>
                <li>Descripction producto :
                   <span class="separator">/</span> {{$product->description}}</li>
                <hr>                
            @endforeach
            <h2>Total $ {{$total}}</h2>
        </ul>
        </div>
    </div>

        </div>
    </div>

  
<div class="botones">
    <a class="btn btn-info" href="{{url('/order')}}">Volver al listado</a>
    <a class="btn btn-success" href="{{route('descargarPDF' ,$order->id)}}">imprimir PDF</a>
</div>

</div>

@endsection