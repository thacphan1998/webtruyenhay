<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    //

    public function saveCategory($data)
    {
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->slug = $data['slug'];
        $this->save();
        return 1;
    }

    public function updateCategory($data)
    {
        $category = $this->find($data['id']);
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->slug = $data['slug'];
        $category->save();
        return 1;
    }
}
