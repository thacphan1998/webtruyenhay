<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        
        return view('author',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();
        $data = $this->validate($request, [
            'name'=>'required',
            'description'=>'required',

        ]);
       
        $author->saveAuthor($data);
        return redirect('/quanlytacgia')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::where('id', $id)->first();

        return view('edit_author', compact('author', 'id'));
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
        $author = new Author();
        $data = $this->validate($request, [
            'name' => 'required',
            'description' => '',
        ]);
        $data['id'] = $id;
        $author->updateAuthor($data);

        return redirect('/quanlytacgia')->with('success', 'Author has been updated!!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return redirect('/quanlytacgia')->with('success', 'Author has been deleted!!');
    }
}
