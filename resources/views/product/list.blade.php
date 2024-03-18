<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href={{ URL('/images/Logo.svg') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href={{ URL('CSS/list.css') }}>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniStore</title>
</head>
<body>
    <div class="sus_icon content d-flex justify-content-center align-items-center">
        <i class="bi bi-person-bounding-box" style="color: #272727"></i><span>{{ Auth::user()->username }} (admin)</span> <a href={{ route('logout') }}><i class="bi bi-box-arrow-left" style="color: #737373"></i></a>
    </div>
    <div class="continut">
        <div class="cont_log">
            <h3 class="text-center">Products</h3>
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        </div>
   
    <div class="content_tot">
       <div class="adaug">
        <a href={{ route('products.create') }}><i class="bi bi-plus-square" style="color: #148312; font-size: 20px;"></i></a>  
        <div class="continutul mt-3">
            <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Type</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach ($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td class="im text-center"><img src="{{ URL('images/'.$product->image) }}" alt=""></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->type }}</td>
                <td><a href={{ route('products.edit', $product->id) }}><i class="bi bi-pencil-square" style="color: #307FD9"></i></a></td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border: none; outline: none; background-color: transparent;"><i class="bi bi-trash-fill" style="color: #5E1A1A"></i></button>
                    </form>
                    
                </td>
            </tr>
            
            @endforeach
        </table>
        {{ $products->links() }}
        </div>
       </div>
    </div>
</div>
</body>
</html>