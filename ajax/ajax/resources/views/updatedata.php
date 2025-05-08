<form method="POST" action="/update/{{$list[0]->id}}">

    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="{{ old('name',$list->name) }}"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{$list[0]->email}}"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="{{$list[0]->password}}"></td>
           
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update" name="submit"></td>
        </tr>
    </table>
</form>
