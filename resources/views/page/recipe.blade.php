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
                <p>Recipes</a>
                </p>
            </div>
            <div class="logo">
                <a href="{{route('showrecipe')}}"><img src="img/cucinare 2.png" alt=""></a>
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
            @foreach($recipes as $resep)
                <div class="img">
                    <img src="{{asset('/storage/'.$resep->img)}}" alt="">
                </div>
                <div>
                    {{$resep -> recipe_name}}
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
