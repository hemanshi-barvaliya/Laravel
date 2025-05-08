<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Admin file access</title>
</head>
<body>

    @include('header')

    <h1>Admin Data </h1>

    <form method="post">
        @csrf
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="name" placeholder="enter name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" placeholder="enter email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" placeholder="enter password"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Add Admin">
                </th>
            </tr>
        </table>
    </form>

    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php $cnt=1; ?>
        @foreach($list as $rec)
            <tr>
                <td>{{$cnt++}}</td>
                <td>{{$rec->name}}</td>
                <td>{{$rec->email}}</td>
                <td>{{$rec->password}}</td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>