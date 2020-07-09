<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comment',compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $data = $this->validate($request, [
            'content' => 'required',
            'user_id' => '',
            'story_id' => '',

        ]);

        $slug = $request->slug;

        $comment->saveComment($data);
        if(!empty($slug)){
            return redirect($slug)->with('success', 'New support ticket has been created! Wait sometime to get resolved');
        }
        return redirect('/quanlybinhluan')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::where('id', $id)->first();

        return view('edit_comment', compact('comment', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = new Comment();
        $data = $this->validate($request, [
            'content' => 'required',
            'user_id' => '',
            'story_id' => '',
        ]);
        $data['id'] = $id;
        $comment->updateComment($data);

        return redirect('/quanlybinhluan')->with('success', 'Comment has been updated!!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/quanlybinhluan')->with('success', 'Comment has been deleted!!');
    }
}