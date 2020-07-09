<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'story_id'];
    //

    public function saveComment($data)
    {
        $this->content = $data['content'];
        $this->user_id = $data['user_id'];
        $this->story_id = $data['story_id'];
        $this->save();
        return 1;
    }

    public function updateComment($data)
    {
        $comment = $this->find($data['id']);
        $comment->content = $data['content'];
        $comment->user_id = $data['user_id'];
        $comment->story_id = $data['story_id'];
        $comment->save();
        return 1;
    }
}