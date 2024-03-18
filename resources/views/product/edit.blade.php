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
    <link rel="stylesheet" href={{ URL('CSS/create.css') }}>
    <link rel="stylesheet" href={{ URL('CSS/edit.css') }}>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MiniStore</title>
</head>
<body>
    <div class="sus_icon content d-flex justify-content-center align-items-center">
        <i class="bi bi-person-bounding-box" style="color: #272727"></i><span>{{ Auth::user()->username }} (admin)</span> <a href={{ route('logout') }}><i class="bi bi-box-arrow-left" style="color: #737373"></i></a>
    </div>
    <div class="continut">
        <div class="cont_log">
            <h3 class="text-center">Edit product</h3>
        </div>
    </div>

   <form action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PATCH')
    <div class="elem_create">
            
     
        <h3>Name</h3>
        <input type="text" name="name" placeholder="Enter name" value="{{ $product_info->name }}">
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="elem_create">
        <h3>Description</h3>
        <input type="text" name="description" placeholder="Enter description" value="{{ $product_info->description }}">
        <span class="text-danger">{{ $errors->first('description') }}</span>
    </div>
    <div class="elem_create">
        <h3>Image</h3>
        <input type="file" id="fileInput" class="form-control" name="image" placeholder="Enter image name" value="{{ $product_info->image }}">
        <span class="text-danger">{{ $errors->first('image') }}</span>
    </div>
    
    <div class="elem_create">
        <h3>Price</h3>
        <input type="text" name="price" pattern="[0-9]+([,\.][0-9]+)?" placeholder="Enter product price" step="any" oninput="this.value = this.value.replace(/[^0-9\.,]/g, '')" value="{{ $product_info->price }}">
        <span class="text-danger">{{ $errors->first('price') }}</span>
    </div>
    
    
    <div class="elem_create">
        <h3>Type</h3>
        <input type="text" name="type" placeholder="Enter product type" value="{{ $product_info->type }}">
        <span class="text-danger">{{ $errors->first('type') }}</span>
    </div>
    <button type="submit">Submit</button>
  
   </form>
 
</body>
</html>
