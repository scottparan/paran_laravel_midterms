<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    h1 {text-align: center;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
    </div>
    <div class ="col-md-12 text-center">
        <a class="btn btn-primary" role="button" href="{{route('product.create')}}">Create a Product</a>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td class="align-middle">{{$product->id}}</td>
                    <td class="align-middle">{{$product->name}}</td>
                    <td class="align-middle">{{$product->quantity}}</td>
                    <td class="align-middle">{{$product->price}}</td>
                    <td class="align-middle">{{$product->description}}</td>
                    <td class="align-middle">
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
</body>
</html>