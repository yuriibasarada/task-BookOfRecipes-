<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="container-fluid readRecipe">
    <h2 class="mainTitle"><?= $recipe['recipe_name'] ?></h2>
    <p><?= $recipe['recipe_description'] ?></p>
    <h2 class="ingredientTitle">Ingredient</h2>
    <?php
    foreach ($ingredients as $ingredient) {
        echo "
        <hr> 
            <div class='row'>
                <div class='col-md-8'><h6>" . $ingredient['ingredient_name'] . "</h6></div>
                <div class='col-md-2'><h6>" . $ingredient['ingredient_recipe_amount'] . "</h6></div>
</div>
<hr>
";
    }
    ?>
</div>

</body>
</html>