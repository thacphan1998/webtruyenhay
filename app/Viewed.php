<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewed extends Model
{
    protected $table = 'viewed';
    protected $fillable = ['story_id', 'user_id'];
    //

    public function saveViewedStory($data)
    {
        $this->story_id = $data['story_id'];
        $this->user_id = $data['user_id'];
        $this->save();
        return 1;
    }

    public function updateViewedStory($data)
    {
        $viwedStory = $this->find($data['id']);
        $viwedStory->story_id = $data['story_id'];
        $viwedStory->user_id = $data['user_id'];
        $viwedStory->save();
        return 1;
    }
}