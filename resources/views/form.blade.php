<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product Form</title>
</head>
<body>
    <div class="container mt-5">
        <form action="/create" method="post">
            @csrf <!--  CSRF is a token used for protection  -->
            <h1>Enter Product Details :</h1><br>
            <div class="mb-3 col-md-3">
                <label for="productname" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productname" name="productname">
            </div>
            <div class="mb-3 col-md-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3 col-md-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
