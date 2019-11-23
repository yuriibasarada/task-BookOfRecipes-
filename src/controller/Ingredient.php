<?php


namespace controller;


use core\Controller;
use shCore\error\CoreException;

class Ingredient extends Controller
{
    const LAYOUT = 'auth';
    const NAME = 'ingredient';

    public function page() {
        $ingredient = $this->model->ingredient();
        $this->view->layout = self::LAYOUT;
        return $this->view->render('Ingredient', ['ingredients' => $ingredient]);
    }

    public function add()
    {
        try {
            $this->model->create(['ingredient_name' => $this->getData()['name']]);
            return ['message' => 'You have successfully created a ingredient'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }
    }

    public function create() {
        $this->view->layout = self::LAYOUT;
        $this->view->render('Create');
    }

    public function delete(int $id) {
        try {
            $this->model->foreignKeyOff();
            $this->model->delete($id);
            $this->model->foreignKeyOn();
            return ['message' => 'It`s okay!'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }
    }

    public function edit(int $id) {
        $ingredient = $this->model->read($id);
        $this->view->path = '/ingredient/edit';
        $this->view->layout = self::LAYOUT;
        $this->view->render('Edit', ['ingredient' => $ingredient]);
    }

    public function update(int $id) {
        $name = $this->getData()['name'];
        try {
            $this->model->update($id, ['ingredient_name' => $name]);
            return ['message' => 'You have successfully updated a ingredient'];
        } catch (CoreException $e) {
            return ['error' => 'Verify the data is correct.'];
        }
    }
}