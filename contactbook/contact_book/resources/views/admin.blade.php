<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    @csrf 
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contact"></td>
            </tr>
            <tr>
                <td>image:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <table border={1}>
        <tr>
        <td>No</td>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
            <td>contact</td>
            <td>image</td>
            <td>update</td>
            <td>delete</td>
        </tr>
        <?php $cnt=1;?>
        @foreach($list as $req)
        <tr>
            <td>{{$cnt++}}</td>
            <td>{{$req->name}}</td>
            <td>{{$req->email}}</td>
            <td>{{$req->password}}</td>
            <td>{{$req->contact}}</td>
            <td><img src="{{asset('images/' .$req->image)}}" width="100" height="100"></td>
            <td><a href="{{url('/delete/' .$req->id)}}">Delete</a></td>
            <td><a href="{{url('/update/' .$req->id)}}">update</a></td>


        </tr>
        @endforeach
    </table>
</body>
</html>