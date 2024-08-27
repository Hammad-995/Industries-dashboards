<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('bootstrap-five/bootstrap.min.css')}}">

</head>
<body>
    @include('layouts.header.index')

    <div>@yield('content')</div>

    @include('layouts.footer.index')

<script src="{{asset('pooper/pooper.js')}}"></script>
<script src="{{asset('jquery/jquery_3.7.1.js')}}"></script>
<script src="{{asset('bootstrap-five/bootstrap.min.js')}}"></script>
</body>
</html>