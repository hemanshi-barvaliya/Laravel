<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Admin file access</title>
</head>
<body>

    @include('header')

    <h1>Image Store</h1>

    <form method="post" enctype="multipart/form-data">
        @csrf
        <table border="1">
            <tr>
                <th>Image</th>
                <td><input type="text" name="Iname" placeholder="enter name"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="file" name="profile"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Save Image">
                </th>
            </tr>
        </table>
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody><?php $cnt=1; ?>
            @foreach($list as $i)
                <tr>
                    <td>{{$cnt++}}</td>
                    <td>{{$i->img_name}}</td>
                    <td>
                        <img src="{{asset('upload_img/'.$i->profile)}}" width="50" height="" alt="">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>