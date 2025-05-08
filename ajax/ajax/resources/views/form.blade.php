<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST" id="formdata">
  @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Email:</td> 
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="submit"></td>
        </tr>
    </table>
</form>

<table id="data">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <tbody>
        <?php $cnt=1; ?>
    @foreach($list as $req)
    <tr>
        <td>{{$cnt++}}</td>
        <td>{{$req->name}}</td>
        <td>{{$req->email}}</td>
        <td>{{$req->password}}</td>
        <td><a class="btndelete" href="{{url('/delete/' .$req->id)}}">Delete</a></td>
        <td><a class="btndelete" href="{{url('/update/' .$req->id)}}">Update</a></td>

    </tr>
    @endforeach
    </tbody>
</table>


<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

<script>
   $(document).on('submit', '#formdata', function(e) {
        e.preventDefault();
        
        var val = $(this).serialize();

        $.ajax({ 

            type: "POST",
            url: "{{ URL('/form') }}", 
            data:val,

            success: function(res){
                $('#data').html(res);
                $('#formdata')[0].reset();
            } 
        });
    });

    

</script>

</body>
</html>
