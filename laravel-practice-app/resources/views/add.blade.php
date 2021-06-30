<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>

<body>
    <h1>Add Member</h1>
    <form action="addmember" method="post">
        @csrf
        @if(session('username'))
        <h3 style="color: green;">{{session('username')}} user has been added</h3>
        @endif
        <input type="text" name="username" placeholder="Enter user id"> <br>
        <span style="color: red;">@error('username'){{$message}}@enderror</span> <br>
        <input type="password" name="userpassword" placeholder="Enter your password"> <br>
        <span style="color: red;">@error('userpassword'){{$message}}@enderror</span>  <br>
        <input type="text" name="useremail" placeholder="Enter user email"> <br>
        <span style="color: red;">@error('useremail'){{$message}}@enderror</span>  <br>
        <button type="submit">Add Member</button>
    </form>
</body>

</html>