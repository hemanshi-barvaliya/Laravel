<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/update/' . $list[0]->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="{{ $list[0]->name }}"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{ $list[0]->email }}"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="{{ $list[0]->password }}"></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><input type="text" name="contact" value="{{ $list[0]->contact }}"></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="image" value="{{ $list[0]->contact }}"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>