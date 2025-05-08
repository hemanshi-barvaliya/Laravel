<form method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>Hobby:</td>
            <td>
                <input type="checkbox" name="hobby[]" value="cricket"> Cricket
                <input type="checkbox" name="hobby[]" value="camping"> Camping
                <input type="checkbox" name="hobby[]" value="travelling"> Travelling
            </td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
    
    <table>
        <tr>
            <td>NO</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>HOBBY</td>
            <td>IMAGE</td>
            <td>UPDATE</td>
            <td>DELETE</td>
        </tr>
        <?php $cnt=1; ?>
        @foreach($list as $req)
        <tr>
            <td>{{$cnt++}}</td>
            <td>{{$req->name}}</td>
            <td>{{$req->email}}</td>
            <td>{{$req->password}}</td>
            <td>{{ implode(', ', explode(',', $req->hobby)) }}</td>
            <td><img src="{{asset('images/' .$req->image)}}" alt="image" height="100px" width="100px"></td>
            <td><a href="{{url('/update/' .$req->id)}}">UPDATE</a></td>
            <td><a href="{{url('/delete/' .$req->id)}}">Delete</a></td>
           
        </tr>
        @endforeach
    </table>
</form>
