<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Products</h1>
            </div>
            <div class="col-2">
                <a href="/create" class="btn btn-success">Add New</a>
            </div>
            <!-- search box -->
            <div class="col-12">
                <form action=""> 
                    <input type="search" name="search" class="form-controls" required>
                    <input required type="radio" name="by" value="name"> Name
                    
                    <button>Search by Name</button>
                </form>
                <br>
                <form action=""> 
                    <input type="number" name="price1" class="form-controls" required>
                    <input type="number" name="price2" class="form-controls" required>
                    <button>Search by Price</button>
                </form>
            </div>
            <!-- end of search box -->
            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Name</th>
                            <th scope="col">price</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Seller Name</th> 
                            <th scope="col">Ratings</th>
                            <th scope="col"></th> 
                        </tr>
                   
                    </thead>
                    <tbody>
                        <!--$x is the -->
                        @foreach($data as $x)
                        <tr> 
                            <th scope="row">{{$x->name}}</th> 
                            <th scope="row">{{$x->price}}</th> 
                            <th scope="row">{{$x->category_name}}</th> 
                            <th scope="row">{{$x->description}}</th> 
                            <th scope="row">{{$x->seller_name}}</th> 
                            <th scope="row">{{$x->ratings}}</th> 
                            <th scope="row">
                            <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                            <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
                            </th> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>