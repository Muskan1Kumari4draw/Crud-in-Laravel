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
              <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
          </div>
        <div class="col-md-10">
          <div class="card border-0 shadow-lg my-4">
            <div class="card-header bg-dark">
              <h3 class="text-white">Create Product</h3>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
              @csrf <!-- Add CSRF token -->
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label h4">Name</label>
                  <input type="text" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control form-control-lg" name="name" placeholder="Enter Name">
                  @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label h4">Sku</label>
                  <input type="text" value="{{ old('sku') }}"  class="@error('sku') is-invalid @enderror form-control form-control-lg" name="sku" placeholder="Enter SKU">
                  @error('sku')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label h4">Price</label>
                  <input type="text" value="{{ old('price') }}"  class="@error('price') is-invalid @enderror form-control form-control-lg" name="price" placeholder="Enter Price">
                  @error('price')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label h4">Description</label>
                  <textarea class="form-control form-control-lg" name="description" placeholder="Enter Description" cols="50" rows="3">{{ old('description') }}</textarea>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label h4">Image</label>
                  <input type="file" value="{{ old('image') }}"  class="form-control form-control-lg" name="image">
                  @if($product->image != "")
                <img src="{{ asset('uploads/products/'.$product->image)}}" width="50" height="50">
            @endif
                </div>
              </div>
              <div class="d-grid">
                <button class="btn btn-lg btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
