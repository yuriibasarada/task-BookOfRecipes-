<!doctype html>
<html lang="en">

<body>
<div class="container-fluid center">
    <div class="addNewRecipe row">
        <div class="col-md-6"><h1>My Recipes</h1></div>
        <div class="col-md-6"><button type="button" class="btn btn-success" id="addNewRecipe"><a href="/recipe/create?token=<?=session_id()?>">Add new Recipe</a></button></div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!$recipe) {
            echo "<p>No recipes yet, add the first one!</p>";
        }
        foreach ($recipe as $rec) {
            echo "<tr>
<th scope='row'>". $rec['recipe_id']  ."</th>
    <td>". $rec['recipe_name'] ."</td>
    <td>". $rec['recipe_description'] ."</td>
    <td class='iconActions'>
    <a href='/recipe/read/". $rec['recipe_id'] . "?token=". session_id() ."'><i class=\"far fa-eye\"></i></a>
    <a href='/recipe/edit/". $rec['recipe_id'] . "?token=". session_id() ."'><i class=\"far fa-edit\"></i></a>
    <a href='#' rel=\"". $rec['recipe_id'] ."\" onclick=\"deleteRecipe(this);\"><i class=\"fas fa-ban\"></i></a></td>
</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>