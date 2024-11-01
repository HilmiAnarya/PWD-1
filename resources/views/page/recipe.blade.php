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
                    {{$resep->img}}
                </div>
                    {{$resep->recipe_name}}
                    {{$resep->desc}}
                <ul>
                    @foreach($resep->ingredients as $ig)
                        <li>{{ $ig['name'] }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>

</body>
</html>
