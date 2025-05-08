<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('link')
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>sub1</td>
            <td>sub2</td>
            <td>sub3</td>
            <td>total</td>
            <td>per</td>
        </tr>
        <tr>
            <td>{{$no}}</td>
            <td>{{$name}}</td>
            <td>{{$sub1}}</td>
            <td>{{$sub2}}</td>
            <td>{{$sub3}}</td>
            <td>{{$total}}</td>
            <td>{{$per}}</td>
        </tr>
    </table> 
   
</body>
</html>