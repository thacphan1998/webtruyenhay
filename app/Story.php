<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['name', 'author', 'publisher', 'source', 'episode', 'status', 'summary', 'content', 'number_of_reads', 'number_of_downloads', 'category_id', 'user_id', 'author_id', 'publisher_id'];
    //

    public function saveStory($data)
    {
        $this->name = $data['name'];
        $this->author = $data['author'];
        $this->publisher = $data['publisher'];
        $this->source = $data['source'];
        $this->episode = $data['episode'];
        $this->status = $data['status'];
        $this->summary = $data['summary'];
        $this->content = $data['content'];
        $this->number_of_reads = $data['number_of_reads'];
        $this->number_of_downloads = $data['number_of_downloads'];
        $this->category_id = $data['category_id'];
        $this->author_id = $data['author_id'];
        $this->publisher_id = $data['publisher_id'];
        $this->image = $data['image'];
        $this->user_id = 1;
        $this->slug = $data['slug'];
        $this->save();
        return 1;
    }

    public function updateStory($data)
    {
        $story = $this->find($data['id']);
        $story->name = $data['name'];
        $story->author = $data['author'];
        $story->publisher = $data['publisher'];
        $story->source = $data['source'];
        $story->episode = $data['episode'];
        $story->status = $data['status'];
        $story->summary = $data['summary'];
        $story->content = $data['content'];
        $story->number_of_reads = $data['number_of_reads'];
        $story->number_of_downloads = $data['number_of_downloads'];
        $story->category_id = $data['category_id'];
        $story->author_id = $data['author_id'];
        $story->publisher_id = $data['publisher_id'];
        $story->slug = $data['slug'];
        $story->user_id = 1;
        $story->save();
        return 1;
    }

}
