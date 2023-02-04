<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@include('publicUser.layouts.head')

</head>
<body>

@include('publicUser.layouts.main-header')


@yield('content')


@include('publicUser.layouts.footer')

@include('publicUser.layouts.footer-scripts')


</body>
</html>
