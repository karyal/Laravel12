<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        h1{
            color:green;
        }
        .main{
            margin-top: 100px;
            text-align: center;
        }

        .footer p{
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: skyblue;
            margin: 0;
            padding: 10px;
        }

    </style>
</head>
<body>
<div>
    <ul>
    <li><a hre=''>Home</a></li>
    <li><a hre=''>About</a></li>
    <li><a hre=''>Contact</a></li>
    </ul>
</div>

<div>
    @section('main')
    @show
</div>

<div class="footer">
    <p>Footer Text</p>
</div>
</body>
</html>