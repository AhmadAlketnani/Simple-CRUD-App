<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body style="background-color: black;color: white">
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                    <h1>Create a Product</h1>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>

                        @endforeach
                    </ul>
                @endif
                </div>
            <div class="card-body">
<form action="{{route('product.create')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name: </label>
        <input type="text" name="name" class="form-control" placeholder="name" >
    </div>

    <div class="mb-3">
        <label class="form-label">Qty: </label>
        <input type="number" min="0" name="qty" class="form-control" placeholder="Qty" >
    </div>

    <div class="mb-3">
        <label class="form-label">Price: </label>
        <input type="text" name="price" class="form-control" placeholder="Price" >
    </div>
    <div class="mb-3">
        <label class="form-label">Description: </label>
        <input type="text" name="description" class="form-control" placeholder="Description" >
    </div>
    <div class="mb-3">
        <div class="d-grid">
            <button class="btn btn-primary">save a new Product</button>
        </div>
    </div>

</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
