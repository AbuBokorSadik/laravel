<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <x-header data="users component header"/>
    <h1>User page</h1>

</body>
</html> -->

<!-- .............blade................. -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade</title>
</head>

<body>
    <h1>Users page</h1>
    @if($users=='sadik')
        <h3>Hi {{$users}}</h3>
        @endif

    @for($i=0;$i<10;$i++) <h4>{{$i}}
        <h4 />
        @endfor

    @foreach ($users as $user)
        <h4>{{$user}}</h4>
        @endforeach

    @csrf

</body>

<script>
    var data = @json($users);
    console.warn(data);
</script>

</html> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>

<body>
    <h1>User Login</h1>
    <form action="users" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter user id"> <br>
        <span style="color: red;">@error('username'){{$message}}@enderror</span> <br>
        <input type="password" name="userpassword" placeholder="Enter your password"> <br>
        <span style="color: red;">@error('userpassword'){{$message}}@enderror</span>  <br>
        <button type="submit">Login</button>
    </form>
</body>

</html> -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>

<body>
    @foreach($collection as $item)
    <h1>{{$item['email']}}</h1>
    @endforeach
</body>

</html> -->