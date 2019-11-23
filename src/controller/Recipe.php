<?php

namespace controller;

use core\App;
use core\Controller;
use shCore\error\CoreException;

class Recipe extends  Controller
{
    const NAME = 'recipe';

    public function page() {

        $recipe = $this->model->recipe();
        $this->view->layout = 'auth';
        return $this->view->render('Recipe', ['recipe' => $recipe]);
    }

    public function create() {
        $ingredient = $this->model->ingredient();
        $this->view->layout = 'auth';
        return $this->view->render('Create', ['ingredient' => $ingredient]);
    }

    public function add()
    {
        $data = $this->getData();
        try {
            $recipe_id = $this->model->createRecipe(['recipe_name' => $data['name'], 'recipe_description' => $data['description']]);
            foreach ($data['ingredients'] as $ingredient) {
                $this->model->createIngredientRecipe([
                    'ingredient_recipe_recipe_id' => $recipe_id,
                    'ingredient_recipe_ingredient_id' => $ingredient['ingredient'],
                    'ingredient_recipe_amount' => $ingredient['amount']
                ]);
            }
            return ['message' => 'You have successfully created a recipe'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }
    }
    public function read($id) {
        $recipe = $this->model->read($id);
        $rInIng = $this->model->getIngredientRecipeById($id);
         $this->view->path = '/recipe/read';
         $this->view->layout = 'auth';
        return $this->view->render('Read', ['recipe' => $recipe, 'ingredients' =>$rInIng]);
    }

    public function delete($id) {
        try {
            $this->model->foreignKeyOff();
            $this->model->delete($id);
            $this->model->foreignKeyOn();
            return ['message' => 'It`s okay!'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }

    }

    public function edit($id) {
        $recipe = $this->model->read($id);
        $rInIngAll = $this->model->ingredient();
        $rInIng = $this->model->getIngredientRecipeById($id);
        $this->view->path = '/recipe/edit';
        $this->view->layout = 'auth';
        return $this->view->render('Edit', ['recipe' => $recipe, 'ingredients' =>$rInIng, 'allIngredients' => $rInIngAll]);
    }

    public function update($id) {
        $data = $this->getData();
        try {
            $this->model->edit($id, ['recipe_name' => $data['name'], 'recipe_description' => $data['description']]);
            $this->model->deleteIngInRecByRecipeId($id);
            foreach ($data['ingredients'] as $ingredient) {
                $this->model->createIngredientRecipe([
                    'ingredient_recipe_recipe_id' => $id,
                    'ingredient_recipe_ingredient_id' => $ingredient['ingredient'],
                    'ingredient_recipe_amount' => $ingredient['amount']
                ]);
            }
            return ['message' => 'You have successfully update a recipe'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }
    }
}