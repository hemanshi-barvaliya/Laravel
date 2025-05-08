<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="{{ url('/update/' . $list[0]->id) }}" method="post" >
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
            <td>Hobby:</td>
            <td>
                <input type="checkbox" name="hobby[]" value="cricket"
                {{ in_array('cricket', explode(',', $list[0]->hobby)) ? 'checked' : '' }}> Cricket
                <input type="checkbox" name="hobby[]" value="camping" 
                {{ in_array('camping', explode(',', $list[0]->hobby)) ? 'checked' : '' }}> Camping
                <input type="checkbox" name="hobby[]" value="travelling" 
                {{ in_array('travelling', explode(',', $list[0]->hobby)) ? 'checked' : '' }}> Travelling
            </td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="image" value="{{$list[0]->image}}"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>
