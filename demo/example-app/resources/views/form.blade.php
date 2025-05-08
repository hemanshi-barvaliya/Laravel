<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
   @csrf 
        No:<input type="number" name="no" placeholder="enter number"><br><br>
        Name:<input type="text" name="name" placeholder="enter name"><br><br>
        email:<input type="text" name="email" placeholder="enter email"><br><br>
        sub1:<input type="text" name="sub1" placeholder="enter marks"><br><br>
        sub2:<input type="text" name="sub2"  placeholder="enter marks"><br><br>
        sub3:<input type="text" name="sub3" placeholder="enter marks"><br><br>
        <input type="submit" name="submit">
 </form>

 <p>Name = {{$name}}</p>
 <p>Email = {{$email}}</p>
 <p>sub1 = {{$sub1}}</p>
 <p>sub2 = {{$sub2}}</p>
 <p>sub3 = {{$sub3}}</p>
 <p>Total = {{$sub3+$sub2+$sub1}}</p>
 <p>per = {{ceil(($sub3+$sub2+$sub1)/3)}}</p>
 <p>Max={{max($sub1, $sub2, $sub3)}}</p>
 <p>Min={{min($sub1, $sub2, $sub3)}}</p>
 
 

 <table border='1'>
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>email</td>
        <td>sub1</td>
        <td>sub2</td>
        <td>sub3</td>
        <td>Total</td>
        <td>per</td>
        <td>max</td>
        <td>Min</td>
    </tr>
    <tr>
    <td>{{$no}}</td>
    <td>{{$name}}</td>
    <td>{{$email}}</td>
    <td>{{$sub1}}</d>
    <td>{{$sub2}}</td>
    <td>{{$sub3}}</td>
    <td> {{$sub3+$sub2+$sub1}}</td>
    <td>{{ceil(($sub3+$sub2+$sub1)/3)}}</td>
    <td>{{max($sub1, $sub2, $sub3)}}</td>
    <td>{{min($sub1, $sub2, $sub3)}}</td>
    </tr>
 </table>
</body>
</html>