<?php


namespace model;


use core\Model;

class Ingredient extends Model
{
    private $limit = 10;
    private $offset = 0;

    const NAME = 'ingredient';

    public function create(array $data)
    {
        $this->getCrud(self::NAME)->create($data);
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

    public function delete(int $id) {
        $this->query("DELETE FROM ingredient WHERE ingredient_id = $id");
    }

    public function read(int $id) {
        return $this->getCrud(self::NAME)->read($id);
    }

    public function update(int $id, array $data) {
        $this->getCrud(self::NAME)->update($id, $data);
    }
}