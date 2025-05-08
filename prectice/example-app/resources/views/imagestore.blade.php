<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="/storeimage" enctype="multipart/form-data" method="post">
   @csrf
 
    <table>
        <tr>
            <td>Image Name</td>
            <td><input type="text" name="iname" ></td>
        </tr>
        <tr>
            <td>profile</td>
            <td><input type="file" name="profile"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
    </form>

    <table>
    <tr>
        <td>Name</td>
        <td>Image</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
    @foreach($list as $req)
    <tr>
        <td>{{ $req->image_name }}</td>
        <td><img src="{{ url('/images/' . $req->profile) }}" alt="image" width="100"></td> <!-- Display the image -->
        <td><a href="{{ url('/imgdelete/' . $req->id) }}">Delete</a></td>
        <td><a href="{{ url('/updateimage/' . $req->id) }}">Update</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>