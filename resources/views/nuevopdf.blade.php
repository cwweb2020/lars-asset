<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>pdf</title>
</head>
<body>

    
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

  
<a class="btn btn-info mt-4" href="{{url('/order')}}">Volver al listado</a>
</div>

    
</body>
</html>