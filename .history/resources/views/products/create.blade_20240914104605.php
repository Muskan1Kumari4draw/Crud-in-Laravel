<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel - Crud Operation</title>
  </head>
  <body>
    <div class="bg-dark py-3"><h1 class="text-white text-center">Simple Laravel Crud</h1></div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
<div class="card border-0 shadow-lg my-4">
    <div class="card-header bg-dark">
<h3 class="text-white">Create Product</h3>
<form action="{{ route('products.store') }}" method="POST">
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4" for="">Name</label>
            <input type="text" class="@error('name') is-invalid @enderror  form-control form-control-lg" placeholder="Enter Name" name="name">
            @error('name')
            <p class="invalid-feedback" >{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4" for="">Sku</label>
            <input type="text" class="@error('sku') is-invalid @enderror   form-control form-control-lg" name="sku" placeholder="Enter SKU">
            @error('sku')
            <p class="invalid-feedback" >{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4" for="">Price</label>
            <input type="text" class="@error('price') is-invalid @enderror   form-control form-control-lg" placeholder="Enter Price" name="price">
            @error('price')
            <p class="invalid-feedback" >{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4" for="">Description</label>
            <textarea type="description" class="form-control form-control-lg" placeholder="Enter Description" name="description" cols="50" rows="3"> </textarea>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4" for="">Image</label>
            <input type="file" class="form-control form-control-lg" placeholder="Enter Name" name="Image">
        </div>
    </div>
    <div class="d-grid">
<button class="btn btn-lg btn-primary">
   Submit
</button></form>
    </div>
</div>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



  </body>
</html>
