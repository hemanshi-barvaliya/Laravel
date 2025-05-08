<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$list[0]->name}}"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$list[0]->email}}"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="{{$list[0]->password}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>