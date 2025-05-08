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
                <td>Image name
                <input type="text" name="iname"></td>
            </tr>
            <tr>
                <td><input type="file" name="profile"></td>
            </tr>
            <tr>
                <td><input type="submit" value="save image"></td>
            </tr>
        </table>
    </form>

    <table>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>image</td>
        </tr>
        <tbody>
            <?php $cnt=1; ?>
            @foreach($list as $i)
            <tr>
                <td>{{$cnt++}}</td>
                <td>{{$i->img_name}}</td>
                <td>
                    <img src="{{asset('images/'.$i->profile)}}" alt="image" width="50" height="50">
                </td>
                <td>
                <td><a href="{{ url('/imgdelete/'.$i->id) }}">Delete</a></td>
                <td><a href="{{ url('/updateimage/'.$i->id) }}">update</a></td>

                       
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>