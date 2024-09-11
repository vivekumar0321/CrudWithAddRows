<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update',$product->id) }}" method="POST">
                            @csrf
                            <div>
                                <div class="row firstRow">
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Item Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $product->item_name }}">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Quantity</label>
                                        <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Sub Total</label>
                                        <input type="text" name="subtotal" class="form-control" value="{{ $product->sub_total }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

