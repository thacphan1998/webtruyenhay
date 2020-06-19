<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'description'];
    //

    public function saveAuthor($data)
    {
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->save();
        return 1;
    }

    public function updateAuthor($data)
    {
        $category = $this->find($data['id']);
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->save();
        return 1;
    }
}
