<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="/recipe"><img src="img/cucinare 2.png" alt=""></a>
            </div>
        </div>
    </nav>

    <div class="textform">
        <h2>Register new account</h2>
    </div>

    <div class="form">
        <form action="{{route('registerp')}}" method="post">
            @csrf
                <input type="text" class="email" name="email" placeholder="EMAIL">
                <input type="text" class="username" name="name" placeholder="USERNAME">
                <input type="password" class="password" name="password" placeholder="PASSWORD">
                <button type="submit" class="button">Regist</button>
            <div class="login">
                <p>Already have account <a href="/login">Login</a>
                <p>
            </div>
        </form>
    </div>

</body>
</html>
