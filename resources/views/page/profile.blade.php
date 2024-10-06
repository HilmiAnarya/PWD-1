<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="left-row">
                <p><a href="/login">Login</a></p>
            </div>
            <div class="logo">
                <a href="/recipe"><img src="img/cucinare 2.png" alt=""></a>
            </div>
            <div class="right-row">
                <div class="profile">
                    <p>Profile</p>
                </div>
                <p>--------------</p>
                <div class="add">
                    <p><a href="/cr">Add Recipe</a></p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="profile">
            <h1>Profile</h1>
            <h3>Here's your detail information about your account</h3>
            <div class="detail">

            </div>
        </div>
    </div>
</body>
</html>
