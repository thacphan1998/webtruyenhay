<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        
        return view('publisher',compact('publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publisher = new Publisher();
        $data = $this->validate($request, [
            'name'=>'required',
            'description'=>'required',

        ]);
       
        $publisher->savePublisher($data);
        return redirect('/quanlynhaxuatban')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher = Publisher::where('id', $id)->first();

        return view('edit_publisher', compact('publisher', 'id'));
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
        $publisher = new Publisher();
        $data = $this->validate($request, [
            'name' => 'required',
            'description' => '',
        ]);
        $data['id'] = $id;
        $publisher->updatePublisher($data);

        return redirect('/quanlynhaxuatban')->with('success', 'Publisher has been updated!!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        $publisher->delete();

        return redirect('/quanlynhaxuatban')->with('success', 'Publisher has been deleted!!');
    }
}
