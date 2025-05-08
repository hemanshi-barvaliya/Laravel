<form method="POST" action="/Insert_Data">
    @CSRF
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
            <td></td>
            <td><input type="submit" value="save" name="save"></td>
        </tr>
    </table>
</form>

<table border="">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>Delete</th>
    <th>Update</th>

    <?php foreach($data as $user) { ?>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="/delete/{{$user->id}}">Delete</a></td>
            <td><a href="/update/{{$user->id}}">Upadte</a></td>

        </tr>
    <?php } ?>
</table>