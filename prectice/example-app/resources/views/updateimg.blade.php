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
                <td>image Name</td>
                <td><input type="text" name="iname" value="{{ $list[0]->image_name }}"></td>
            </tr>
            <tr>
                <td>profile</td>
                <td><input type="file" name="profile" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>