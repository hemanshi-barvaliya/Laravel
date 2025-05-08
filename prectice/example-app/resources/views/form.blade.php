<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    @csrf
    
    <h1>Name:<input type="text" name="name"><br><br></h1>
    <h1>Email:<input type="text" name="email"><br><br></h1>
    <h1>Password:<input type="text" name="password"><br><br></h1>
    <input type="submit" name="submit">
</form>

    <h1>name:{{$name}}</h1>
    <h1>Email:{{$email}}</h1>
    <h1>password:{{$password}}</h1>

</body>
</html>