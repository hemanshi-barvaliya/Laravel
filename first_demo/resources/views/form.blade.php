<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>

<form method="POST">
                
        @csrf 
                  
        Email:<input type="text" name="name" placeholder="Username"><br><br>
        password:<input type="email" name="email" placeholder="Password"> 
        <input type="submit" name="submit" value="Submit"> 
            
</form>
    
    <h1>Name = {{$name}}</h1>
    <h1>Email = {{$email}}</h1>

</body>
</html>