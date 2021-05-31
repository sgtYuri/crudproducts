<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Update Products</h1>
            </div>
            <div class="col-2">
                <a href="/" class="btn btn-danger">Go back</a>
            </div>
            <div class="col-12 mt-5">
                <form action="{{ URL::route('update.save', $data->id) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $data->price}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-control" name="category_name" value="{{ $data->category_name}}" required>
                            <option>Cereal</option>
                            <option>Rice</option>
                            <option>Pasta</option>
                            <option>Fruits</option>
                            <option>vegetable</option>
                            <option>magnolia family</option>
                            <option>purefoods</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="string" class="form-control" name="description" value="{{ $data->description}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Seller name</label>
                        <input type="string" class="form-control" name="seller_name" value="{{ $data->seller_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ratings</label>
                        <input type="number" class="form-control" name="ratings" value="{{ $data->ratings}}" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>