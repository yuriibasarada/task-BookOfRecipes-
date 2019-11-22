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
        $query = "SELECT * FROM  recipe
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

    public function add(array $data)
    {
        $this->getCrud('recipe')->create($data);
    }
}