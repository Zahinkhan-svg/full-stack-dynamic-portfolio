<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@include('partial.header')
@include('partial.sidebar')
@yield('content')
@include('partial.footer')

</body>
</html>