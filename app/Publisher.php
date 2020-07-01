<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name', 'description'];
    //

    public function savePublisher($data)
    {
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->save();
        return 1;
    }

    public function updatePublisher($data)
    {
        $category = $this->find($data['id']);
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->save();
        return 1;
    }
}
