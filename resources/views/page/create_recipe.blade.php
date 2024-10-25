<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/create_recipe.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="left-row">
                <p><a href="/profile">Back</a></p>
            </div>
            <div class="logo">
                <a href="/recipe"><img src="img/cucinare 2.png" alt=""></a>
            </div>
        </div>
    </nav>

    <div class="create">
        <form action="{{route('createsp')}}" method="post">
            @csrf
            <div class="namelab">
                <label for class="form-label">Name:</label>
            </div>
            <input type="text" class="recipe" name="recipe_name" placeholder="Recipe name:">

            <div class="desclab">
                <label for class="form-label">Description:</label>
            </div>
            <textarea class="desc" name="desc" placeholder="Description:"></textarea>

            <div class="imagelab">
                <label for class="form-label">image:</label>
            </div>
            <input type="file" class="img" name="img">

            <div class="button">
                <button type="submit" class="button">kirim</button>
            </div>

        </form>
    </div>
</body>
</html>
