<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('header')

    <h1>Form Data Get And Post</h1>

    <form method="post">
        @csrf
        <input type="text" placeholder="enter name" name="name">
        <input type="email" placeholder="enter email" name="email">
        <input type="submit" value="Add">
    </form>

    <h3>Name = {{$name}}</h3>
    <h3>Email = {{$email}}</h3>

</body>
</html>