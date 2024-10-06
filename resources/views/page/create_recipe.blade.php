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
        <form action="{{url('')}}" method="post">
            <div class="name">
                <label for class="form-label">Name:</label>
            </div>
            <input type="text" class="Recipe" name="recipe_name" placeholder="Recipe name:">

            <div class="desc">
                <label for class="form-label">Description:</label>
            </div>
            <input type="text" class="Desc" name="description" placeholder="Description:">

            <div class="image">
                <label for class="form-label">image:</label>
            </div>
            <input type="file" class="img" name="image">

            <button type="submit" class="button"  name="upload_baru">kirim</button>

        </form>
    </div>
</body>
</html>
