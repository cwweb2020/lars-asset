@extends('templates.template')


@section('content')

<div class="container mt-5">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header">
            <h4> Nro de Orden: {{$order->id}} - Total $ {{$total}}</h4>
        </div>
        <div class="card-body">
            <ul>
            @foreach ($order->products as $product)
                <li>Nombre: {{$product->id}}</li>
                <li>{{$product->name}}</li>
                <li>{{$product->price}}</li>
                <li>{{$product->description}}</li>
                <hr>                
            @endforeach
            
        </ul>
        </div>
    </div>

        </div>
    </div>

  
<a href="{{url('/order')}}">Volver al listado</a>
</div>

@endsection