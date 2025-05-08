<form action="/Insert_Data" method="post">
@csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
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