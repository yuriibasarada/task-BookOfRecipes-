<!doctype html>
<html lang="en">

<body>
<div class="container-fluid form-create">
    <h1 class="headerCreate">Recipe Additions</h1>
    <form>
        <div class="row form-group">
            <div class="col-md-2"><label for="exampleFormControlInput1">Name</label></div>
            <div class="col-md-10"><input name="name" class="form-control" id="exampleFormControlInput1"
                                          placeholder="Name"></div>
        </div>
        <div class="row form-group">
            <div class="col-md-2"><label for="exampleFormControlInput1">Description</label></div>
            <div class="col-md-10"><textarea name="description" cols="70" rows="4"
                                             id="exampleFormControlInput1"></textarea></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4"><label for="exampleFormControlSelect1">Ingredient</label></div>
            <div class="col-md-2"><label for="exampleFormControlInput1">Amount</label></div>
        </div>

        <div class="row form-group ingredient">
            <div class="col-md-4" id="selectInput">
                <select name="ingredient" class="form-control" id="exampleFormControlSelect1">
                    <?php
                    foreach ($ingredient as $ing) {
                        echo "<option value='" . $ing['ingredient_id'] . "'>" . $ing['ingredient_name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="0">
            </div>
            <div class="col-md-2 iconDelete">
                <button type="button" class="dropBlock btn btn-outline-danger"
                        onclick="$(this).closest('.can-delete').remove()"><i class="fas fa-ban fa-2x"></i></button>
            </div>
        </div>
        <div class="row additional">
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-success addMore">Add more</button>
            </div>
            <div class="col-md-5 notFound"><p>Not found in list?</p></div>
            <div class="col-md-4 newIngredient">

                <div class="triger_open">
                    <div class="containerwe">
                        <h3>Ingredient Additions</h3>
                        <form id="popUpForm">
                            <div class="row">
                                <div class="col-md-2"><label>Name</label></div>
                                <div class="col-md-8 input-div-popup"><input name="name" class="input-popup" placeholder="Name"></div>
                            </div>
                        </form>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="triger_close"><button type="button" class="btn btn-outline-danger">Close</button></div></div>
                            <div class="col-md-6"><button type="button" class="btn btn-outline-success" id="saveChangePopup">Save</button></div>
                        </div>

                    </div>
                </div>
                <button type="button" class="btn btn-dark triger">Create new ingredient</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="saveChanges">
        <button type="button" class="btn btn-success btn-lg" id="saveChange">Add Recipe</button>
    </div>
</div>

</body>
</html>