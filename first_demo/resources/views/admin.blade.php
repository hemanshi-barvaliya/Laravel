<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Database print Admin Data</title>
</head>
<body>
      @include('header')
    <h1>Admin Data</h1>

    <form method="POST" >
            @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" placeholder="enter name" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" placeholder="enter email" name="email"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="password" placeholder="enter password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>

    </form>
  
    <table border={1}>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>
            <th>update</th>
        </tr>

        <?php $cnt=1;?>
        @foreach ($list as $rec)
        <tr>
            <td>{{$cnt++}}</td>
            <td>{{$rec->name}}</td>
            <td>{{$rec->email}}</td>
            <td>{{$rec->password}}</td>
            <td><a href="{{ url('/delete/' .$rec->id) }}">Delete</a></td>
            <td><a href="{{ url('/update/' .$rec->id) }}">update</a></td>
        </tr>
        @endforeach
    </table>    
</body>
</html>