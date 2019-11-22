<?php

namespace controller;

use core\Controller;

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
}