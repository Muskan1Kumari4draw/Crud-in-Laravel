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
    <div class="table">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>name</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Created</th>
        </tr>
    </div>
</div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
