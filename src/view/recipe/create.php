<!doctype html>
<html lang="en">

<body>
<div class="container-fluid form-create">
    <h1 class="headerCreate">Recipe Additions</h1>
    <form>
        <div class="row form-group">
            <div class="col-md-2"><label for="exampleFormControlInput1">Name</label></div>
            <div class="col-md-10"><input name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name"></div>
        </div>
        <div class="row form-group">
            <div class="col-md-2"><label for="exampleFormControlInput1">Description</label></div>
            <div class="col-md-10"><textarea name="description" cols="70" rows="4" id="exampleFormControlInput1"></textarea></div>
        </div>
        <hr>
        <div class="row"><div class="col-md-4"><label for="exampleFormControlSelect1">Ingredient</label></div>
        <div class="col-md-2"> <label for="exampleFormControlInput1">Amount</label></div></div>

        <div class="row form-group blockClone">
            <div class="col-md-4" id="selectInput">
                <select name="ingredient" class="form-control" id="exampleFormControlSelect1">
                    <?php
                    foreach ($ingredient as $ing) {
                        echo "<option value='". $ing['ingredient_id'] ."'>" . $ing['ingredient_name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-2">
               <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="0">
            </div>
            <div class="col-md-2 iconDelete">
                <button type="button" class="dropBlock btn btn-outline-danger" onclick="$(this).closest('.can-delete').remove()"><i class="fas fa-ban fa-2x"></i></button>
            </div>
        </div>

        <div class="row additional">
            <div class="col-md-2"><button type="button" class="btn btn-outline-success addMore">Add more</button></div>
            <div class="col-md-5 notFound"><p>Not found in list?</p></div>
            <div class="col-md-4 newIngredient"><button type="button" class="btn btn-dark">Create new ingredient</button></div>
        </div>
    </form>
    <hr>
    <div class="saveChanges">
        <button type="button" class="btn btn-success btn-lg" id="saveChange">Save changes</button>
    </div>
</div>

</body>
</html>