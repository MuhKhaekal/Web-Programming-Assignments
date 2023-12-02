<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classic Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        body {
            background-color: #1b1b1b; 
            font-family: 'Courier New', monospace; 
        }
        .navbar {
            background-color: #343a40; 
            padding-left: 15px;
        }
        .card {
            background-color: #2b2b2b; 
            color: #ffffff; 
            margin-bottom: 20px;
        }
        .navbar-brand {
            font-size: 24px; 
        }
        .btn-primary {
            background-color: #d9534f; 
            border-color: #d9534f;
        }
        .btn-primary:hover {
            background-color: #c9302c; 
            border-color: #c9302c;
        }
        .form-control {
            background-color: #2b2b2b; 
            color: #ffffff; 
            border-color: #6c757d; 
        }
        .form-select {
            background-color: #2b2b2b;
            color: #ffffff; 
            border-color: #6c757d; 
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Classic Motors</a>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row">

            <form action="/search-product-line" method="POST" class="d-flex">
                @csrf
                <select class="form-select me-3" id="productSelect" name="product">
                    <option value="">Choose Product Lines</option>
                    @foreach ($productlines as $item)
                        <option value="{{ $item->productLine }}">{{ $item->productLine }}</option>
                    @endforeach
                </select>
                <button type="button" id="btnSearchProductLine" class="btn btn-primary">Search</button>
            </form>
            <div class="p-4">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('btnSearchProductLine').addEventListener('click', () => {
            var selectedOption = document.getElementById('productSelect').value;
            if (selectedOption) {
                var url = '/products/' + selectedOption;
                window.location.href = url;
            }
        });
    </script>

</body>

</html>
