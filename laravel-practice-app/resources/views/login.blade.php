<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>User Login</h1>
    <form action="user" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter user id"> <br>
        <span style="color: red;">@error('username'){{$message}}@enderror</span> <br>
        <input type="password" name="userpassword" placeholder="Enter your password"> <br>
        <span style="color: red;">@error('userpassword'){{$message}}@enderror</span>  <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>