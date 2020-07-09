<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikedStory extends Model
{
    protected $fillable = ['story_id', 'user_id'];
    //

    public function saveLikedStory($data)
    {
        $this->story_id = $data['story_id'];
        $this->user_id = $data['user_id'];
        $this->save();
        return 1;
    }

    public function updateLikedStory($data)
    {
        $likedStory = $this->find($data['id']);
        $likedStory->story_id = $data['story_id'];
        $likedStory->user_id = $data['user_id'];
        $likedStory->save();
        return 1;
    }
}