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
        <form action="{{route('showrecipe.store')}}" method="post" enctype="multipart/form-data">
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

    <script>
        let ingredientIndex = 1;
        let stepIndex = 1;

        // Add Ingredient Function
        function addIngredient() {
            const container = document.getElementById('ingredients-container');

            const ingredientDiv = document.createElement('div');
            ingredientDiv.classList.add('ingredient');
            ingredientDiv.style.marginBottom = '10px';

            ingredientDiv.innerHTML = `
            <label>Ingredient Name:</label>
            <input type="text" name="ingredients[${ingredientIndex}][name]" required>

            <label>Quantity:</label>
            <input type="text" name="ingredients[${ingredientIndex}][quantity]" required>

            <label>Unit:</label>
            <input type="text" name="ingredients[${ingredientIndex}][unit]" required>

            <button type="button" onclick="removeIngredient(this)">Remove</button>
        `;

            container.appendChild(ingredientDiv);
            ingredientIndex++;
        }

        // Remove Ingredient Function
        function removeIngredient(button) {
            button.parentNode.remove();
        }

        // Add Step Function
        function addStep() {
            const container = document.getElementById('steps-container');

            const stepDiv = document.createElement('div');
            stepDiv.classList.add('step');
            stepDiv.style.marginBottom = '10px';

            stepDiv.innerHTML = `
            <label>Step ${stepIndex + 1}:</label>
            <textarea name="steps[${stepIndex}][description]" required></textarea>

            <button type="button" onclick="removeStep(this)">Remove</button>
        `;

            container.appendChild(stepDiv);
            stepIndex++;
        }

        // Remove Step Function
        function removeStep(button) {
            button.parentNode.remove();
        }
    </script>

</body>
</html>
