<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create_recipe.css') }}">
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
            <div class="imagelab">
                <label for class="form-label">image:</label>
            </div>
            <input type="file" class="img" name="img">

            <div class="namelab">
                <label for class="form-label">Name:</label>
            </div>
            <input type="text" class="recipe" name="recipe_name" placeholder="Recipe name:">

            <p>Ingredients:</p>
            <div id="ingredients-container">
                <input type="text" class="ingredient" name="ingredients[0][name]" required>
                <button type="button" onclick="removeIngredient(this)" style="display: none;">Remove</button>
            </div>
            <button type="button" onclick="addIngredient()">Add Ingredient</button>

            <div class="steplabel">
                <label>Step 1:</label>
            </div>
            <div id="steps-container">
                <input type="text" class="steps" name="steps[0][description]" required>
                <button type="button" onclick="removeStep(this)" style="display: none;">Remove</button>
            </div>
            <button type="button" onclick="addStep()">Add Ingredient</button>

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

            ingredientDiv.innerHTML = `
            <input type="text" class="ingredient" name="ingredients[${ingredientIndex}][name]" required>

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

            const stepDiv = document.createElement('div')

            stepDiv.innerHTML = `
            <div class="steplabel">
                <label>Step ${stepIndex + 1}:</label>
            </div>
            <textarea name="steps[${stepIndex}][description]" class="steps" required></textarea>

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
