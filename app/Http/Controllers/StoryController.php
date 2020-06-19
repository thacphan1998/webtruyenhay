<?php

namespace App\Http\Controllers;

use App\Category;
use App\Author;
use Illuminate\Http\Request;
use App\Story;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::all();

        return view('story', compact('stories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('add_new_story', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Story();
        $data = $this->validate($request, [
            'name' => 'required',
            'author' => '',
            'publisher' => '',
            'source' => '',
            'episode' => '',
            'status' => '',
            'summary' => '',
            'content' => '',
            'number_of_reads' => '',
            'number_of_downloads' => '',
            'category_id' => '',
            'author_id' => '',
            'image' => '',
            'slug' => ''
            
        ]);
        if ($request->hasFile('file')) {
            $destinationPath = 'path/th/save/file/';
            $files = $request->file('file'); // will get all files
        
            foreach ($files as $file) {//this statement will loop through all files.
                $file_name = $file->getClientOriginalName(); //Get file original name
                $file->move($destinationPath , $file_name); // move files to destination folder
            }
        }
        $file = $data['image'];
        $file->move('upload', $file->getClientOriginalName());
        $data["image"] = $file->getClientOriginalName();
        $story->saveStory($data);
        return redirect('/quanlytruyen')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::where('id', $id)->first();
        $categories = Category::all();
        $authors = Author::all();
        return view('edit_story', compact('story', 'id', 'categories', 'authors'));
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
        $story = new Story();
        $data = $this->validate($request, [
            'name' => 'required',
            'author' => '',
            'publisher' => '',
            'source' => '',
            'episode' => '',
            'status' => '',
            'summary' => '',
            'content' => '',
            'number_of_reads' => '',
            'number_of_downloads' => '',
            'category_id' => '',
            'author_id' => '',
            'slug' => ''
        ]);
        $data['id'] = $id;
        $story->updateStory($data);

        return redirect('/quanlytruyen')->with('success', 'Story has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();

        return redirect('/quanlytruyen')->with('success', 'Story has been deleted!!');
    }
}
