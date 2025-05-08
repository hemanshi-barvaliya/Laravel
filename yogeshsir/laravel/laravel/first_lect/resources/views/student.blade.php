<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Admin file access</title>
</head>
<body>

    @include('header')

    <h1>Student Data </h1>

    <form method="post">
        @csrf
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="sname" placeholder="enter name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="semail" placeholder="enter email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="spassword" placeholder="enter password"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="Add Student">
                </th>
            </tr>
        </table>
    </form>

    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $cnt=1; ?>
            @foreach($list as $rec)
                <tr>
                    <th>{{$cnt++}}</th>
                    <td>{{$rec->sname}}</td>
                    <td>{{$rec->semail}}</td>
                    <td>{{$rec->spassword}}</td>
                    <td><a href="/editstudent/{{$rec->id}}">Update</a></td>
                    <td><a href="/delstudent/{{$rec->id}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>