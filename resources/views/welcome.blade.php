<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Calculator</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body style="background-color: #d8d7d7 ">

    <div class="container text-center">

        <h3>Laravel Arithmetic Calculator</h3>
        <form action="/calculate" class="form-horizontal" method="POST">
            {{ csrf_field() }}


            <div class="row text-center m-5">
                <div class="col-md-3">
                    <select name="operator" id="" class="form-control" required>
                        <option value="" selected> --select operator--</option>
                        <option value="plus"> + </option>
                        <option value="minus"> - </option>
                        <option value="multiply"> * </option>
                        <option value="divide"> / </option>

                    </select>
                </div>

                <div class="col-md-3">
                    <input type="number" class="form-control" name="first" placeholder="Enter first number here"
                        required>
                </div>

                <div class="col-md-3">
                    <input type="number" class="form-control" name="second" placeholder="Enter second number here"
                        required>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <br>

        <div class="row text-center">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                @if (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
                    
                @endif
            </div>
        </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
