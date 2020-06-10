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
        $this->user_id = 1;
        $this->story_id = 2;
        $this->save();
        return 1;
    }

    public function updateComment($data)
    {
        $comment = $this->find($data['id']);
        $comment->content = $data['content'];
        $comment->user_id = 1;
        $comment->story_id = 2;
        $comment->save();
        return 1;
    }
}
