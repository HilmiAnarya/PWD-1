<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <img src="img/cucinare 2.png" alt="">
            </div>
        </div>
    </nav>

    <div class="textform">
        <h2>Login to your account</h2>
    </div>


    <div class="form">
        <form action="{{route('login/post')}}" method="post">
            @csrf
                <input type="text" class="email" name="email" placeholder="EMAIL">
                <input type="text" class="username" name="name" placeholder="USERNAME">
                <input type="password" class="password" name="password" placeholder="PASSWORD">
                <button type="submit" class="button">Login</button>
            <div class="regist">
                <p>Don't have account? <a href="/register">Register</a>
                <p>
            </div>
        </form>
    </div>

</body>
</html>
