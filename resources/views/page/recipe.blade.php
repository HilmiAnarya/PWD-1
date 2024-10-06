<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/recipe.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="left-row">
                <p> <a href="/recipe">Recipes</a>
                </p>
            </div>
            <div class="logo">
                <a href="/recipe"><img src="img/cucinare 2.png" alt=""></a>
            </div>
            <div class="right-row">
                <p> <a href="/profile">Profile</a>
                </p>
            </div>
        </div>
    </nav>

    <div class="recommendation">
        <h1>Todays Recommendation</h1>
    </div>


    <div class="list-recipe">
        <div class="col">
            <img src="img/ketoprak.jpg" alt="">
            <p>Ketoprak</p>
        </div>
        <div class="col">
            <img src="img/martabak.jpg" alt="">
            <p>Martabak</p>
        </div>
        <div class="col">
            <img src="img/mi ayam.jpg" alt="">
            <p>Mie Ayam</p>
        </div>
    </div>

</body>
</html>
