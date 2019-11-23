<!doctype html>
<html lang="en">

<body>
<div class="container-fluid center">
    <div class="addNewIngredient row">
        <div class="col-md-6"><h1>Ingredients</h1></div>
        <div class="col-md-6"><button type="button" class="btn btn-success" id="addNewRecipe"><a href="/ingredient/create?token=<?=session_id()?>">Add new ingredient</a></button></div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!$ingredients) {
            echo "<p>No ingredient yet, add the first one!</p>";
        }
        foreach ($ingredients as $ingredient) {
            echo "<tr>
<th scope='row'>". $ingredient['ingredient_id']  ."</th>
    <td>". $ingredient['ingredient_name'] ."</td>
    <td class='iconActions'>
    <a href='/ingredient/edit/". $ingredient['ingredient_id'] ."?token=" . session_id() . "'><i class=\"far fa-edit\"></i></a>
    <a href='#' rel=\"". $ingredient['ingredient_id'] ."\" onclick=\"deleteIngredient(this);\"><i class=\"fas fa-ban\"></i></a></td>
</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>