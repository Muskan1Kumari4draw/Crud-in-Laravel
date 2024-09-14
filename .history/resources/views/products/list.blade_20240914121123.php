<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel - Crud Operation</title>
  </head>
  <body>
    <div class="bg-dark py-3">
      <h1 class="text-white text-center">Simple Laravel Crud</h1>
    </div>

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 d-flex justify-content-end mt-4">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
        </div>
        <div class="col-md-10 mt-2">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        </div>
        <div class="col-md-10">
          <div class="card border-0 shadow-lg my-4">
            <div class="card-header bg-dark">
              <h3 class="text-white">Products</h3>
            </div>
<div class="card-body">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        @if($products->IsnotEmpty())
@foreach ($products  as $product )

<tr>
    <td>{{ $product->id}}</td>
            <td>{{ $product->image}}</td>
            <td>{{ $product->name}}</td>
            <td>{{ $product->sku}}</td>
            <td>{{ $product->price}}</td>
            <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d','M', 'Y')}}</td>
            <td><a href="" class="btn btn-dark">Edit</a>
                <a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
