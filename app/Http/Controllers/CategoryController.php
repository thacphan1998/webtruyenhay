<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        return view('category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $data = $this->validate($request, [
            'name'=>'required',
            'description'=>'required',
            'slug' => ''

        ]);
       
        $category->saveCategory($data);
        return redirect('/quanlytheloai')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        return view('edit_category', compact('category', 'id'));
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
        $category = new Category();
        $data = $this->validate($request, [
            'name' => 'required',
            'description' => '',
            'slug' => ''
        ]);
        $data['id'] = $id;
        $category->updateCategory($data);

        return redirect('/quanlytheloai')->with('success', 'Category has been updated!!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/quanlytheloai')->with('success', 'Category has been deleted!!');
    }
}
