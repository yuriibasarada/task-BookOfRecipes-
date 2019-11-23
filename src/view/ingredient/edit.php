<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="container-fluid">
    <h1 class="headerCreate">Edit Ingredient</h1>
    <form class="formIngredient">
        <div class="row">
            <div class="col-md-2">
                <label for="nameIngredient">Name</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="nameIngredient" placeholder="Name" value="<?=$ingredient['ingredient_name']?>">
            </div>
        </div>
        <hr class="hrIngredient">
        <div class="saveChanges">
            <button type="button" class="btn btn-success btn-lg" value="<?=$ingredient['ingredient_id']?>" id="saveChange">Save Changes</button>
        </div>
    </form>
</div>
</body>
</html>