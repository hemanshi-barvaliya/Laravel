<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Admin file access</title>
</head>
<body>

    @include('header')

    <h1>Student Data </h1>

    <form method="post">
        @csrf
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="sname" value="{{$list[0]->sname}}" placeholder="enter name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="semail" value="{{$list[0]->semail}}" placeholder="enter email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="spassword" value="{{$list[0]->spassword}}" placeholder="enter password"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Edit Student">
                </th>
            </tr>
        </table>
    </form>
    
</body>
</html>