<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="{{asset('bootstrap-five/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<body>

    @include('layouts.header.index')

    <div>@yield('content')</div>

    @include('layouts.footer.index')

<script src="{{asset('jquery/jquery_3.7.1.js')}}"></script>
<script src="{{asset('popper/popper.js')}}"></script>
<script src="{{asset('bootstrap-five/bootstrap.min.js')}}"></script>

<script>
    function toggleSideBar() {
    var x = document.querySelector(".sidebar");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>

</body>
</html>