<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product Table</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Product Table :</h1><br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-success">
                @foreach($product as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->productname}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
                        <a href="{{url('delete', $product->id)}}" class="btn btn-primary btn-sm">Delete</a>
                    </td>
                </tr>  
                @endforeach  
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>