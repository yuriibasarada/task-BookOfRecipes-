<!doctype html>
<html lang="en">

<body>
<div class="container-fluid center">
    <div class="addNewRecipe">
        <button type="button" class="btn btn-success" id="addNewRecipe"><a href="/recipe/create">Add new Recipe</a></button>
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
            echo "<p>Пока нет рецептов, добавте первый!</p>";
        }
        foreach ($recipe as $rec) {
            echo "<tr>
<th scope='row'>". $rec['recipe_id']  ."</th>
    <td>". $rec['recipe_name'] ."</td>
    <td>". $rec['recipe_description'] ."</td>
    <td class='iconActions'>
    <a href=''><i class=\"far fa-eye\"></i></a>
    <a href=''><i class=\"far fa-edit\"></i></a>
    <a href=''><i class=\"fas fa-ban\"></i></a></td>
</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>