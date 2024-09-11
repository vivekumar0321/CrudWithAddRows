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
                        <h4>Add Products</h4>
                    </div>
                    @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                    @endif

                    <div class="card-body">
                        <button class="btn btn-warning mb-5 addRows"> Add Rows</button>
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div>
                                <div class="row firstRow">
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Item Name</label>
                                        <input type="text" name="name[]" class="form-control">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Quantity</label>
                                        <input type="text" name="quantity[]" id="qty" class="form-control">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Price</label>
                                        <input type="text" name="price[]" id="price" class="form-control"
                                            oninput="myFunction()">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Sub Total</label>
                                        <input type="text" name="subtotal[]" id="subtotal" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function myFunction() {
        let price = $("#price").val();
        let qty = $("#qty").val();
        let subtotal = price * qty;
        $('#subtotal').val(subtotal);
    }

    $(document).on('click', '.addRows', function() {
        $('.firstRow').parent().append(`
        <div class="row">
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Item Name</label>
                                        <input type="text" name="name[]" class="form-control">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Quantity</label>
                                        <input type="text" name="quantity[]" class="form-control">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Price</label>
                                        <input type="text" name="price[]" class="form-control">
                                    </div>
                                    <div class="form-group mb-3 col-md-2">
                                        <label for="">Sub Total</label>
                                        <input type="text" name="subtotal[]" class="form-control">
                                    </div>
                                     <div class="form-group mb-3 mt-4 col-md-2">
                                       <button type="button" class="btn btn-danger deleteRow">Remove</button>
                                    </div>
                                </div>
        `);
    });
    $(document).on('click', '.deleteRow', function() {
        $(this).parent().parent().remove();
    });
</script>
