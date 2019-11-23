<?php

namespace model;

use core\Model;

class Recipe extends Model
{
    private $limit = 10;
    private $offset = 0;

    const NAME = 'recipe';

    public function recipe()
    {
        $limit = 0;
        $offset = 0;
        extract($this->getOffset());
        if(!$limit && !$offset) {
            $limit = $this->limit;
            $offset = $this->offset;
        }
        $query = "SELECT recipe_id, recipe_name,
                 CONCAT(SUBSTRING( recipe_description ,1 , 50 ), '...') as recipe_description
                  FROM  recipe
                  LIMIT $limit OFFSET $offset";
        return $this->query($query)->fetchAssocAll();
    }

    public function ingredient()
    {
        $limit = 0;
        $offset = 0;
        extract($this->getOffset());
        if(!$limit && !$offset) {
            $limit = $this->limit;
            $offset = $this->offset;
        }
        $query = "SELECT * FROM  ingredient
                  LIMIT $limit OFFSET $offset";
        return $this->query($query)->fetchAssocAll();
    }

    public function createRecipe(array $data): string
    {
        return $this->getCrud(self::NAME)->create($data)->newId();
    }

    public function createIngredientRecipe(array $data)
    {
        $this->getCrud('ingredient_recipe')->create($data);
    }

    public function getIngredientRecipeById($id)
    {
        $query = "SELECT ingredient_recipe_amount, ingredient_recipe_ingredient_id, ingredient_recipe_recipe_id, ingredient_recipe_id
                  FROM ingredient i 
                  INNER JOIN ingredient_recipe ir on i.ingredient_id = ir.ingredient_recipe_ingredient_id
                  WHERE ingredient_recipe_recipe_id = $id";
        return $this->query($query)->fetchAssocAll();
    }

    public function read(int $id) {
        return $this->getCrud(self::NAME)->read($id);
    }

    public function delete(int $id) {
        $this->query("DELETE FROM recipe WHERE recipe_id = $id");
    }

    public function edit(int $id, array  $data) {
        return $this->getCrud(self::NAME)->update($id, $data);
    }

    public function deleteIngInRecByRecipeId(int $id) {
        $query = "DELETE FROM ingredient_recipe WHERE ingredient_recipe_recipe_id = $id";
        $this->query($query);
    }
}