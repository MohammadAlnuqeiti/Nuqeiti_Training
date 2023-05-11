<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover a wide range of comprehensive courses designed to enhance your skills and knowledge. Our website offers industry-leading programs in various engineering fields, giving you the opportunity to stand out and advance your career.">
    <meta name="keywords" content="courses,engineering,online,civil engineering,electrical engineering,nuqeiti tarining">
    <meta name="author" content="Mohammad Alnuqeiti">

    @include('publicUser.layouts.head')
    <style>
        .active {
            color: red;
        }
    </style>

</head>
<body>

    @include('publicUser.layouts.main-header')


    @yield('content')


    @include('publicUser.layouts.footer')

    @include('publicUser.layouts.footer-scripts')


</body>
</html>
