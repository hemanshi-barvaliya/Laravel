<?php foreach($data as $user) { ?>  
   <form method="POST" action="/Update_Data/{{$user->id}}">
        @CSRF
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$user->name}}"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$user->email}}"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="{{$user->password}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="save"></td>
            </tr>
        </table>
    </form>
 <?php } ?> 