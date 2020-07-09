<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viewed;

class ViewedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vieweds = Viewed::all();

        return view('viewed_story',compact('vieweds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viewed = new Viewed();
        $slug = $request->slug;
        $user_id = $request->user_id;
        $data = $this->validate($request, [
            'user_id'=>'',
            'story_id'=>'',

        ]);
        if(isset($user_id) && empty($user_id)){
            return redirect('/dang-nhap')->with('error', 'Bạn chưa đăng nhập.');
        }
        $viewed->saveViewedStory($data);
        if(isset($slug) && !empty($slug)){
            return redirect($slug)->with('success', 'Thêm mới thành công');
        }

        return redirect('/quanlytruyendaxem')->with('success', 'Thêm mới thành công');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viewedStory = Viewed::where('id', $id)->first();

        return view('edit_viewed_story', compact('viewedStory', 'id'));
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
        $viewed_story = new Viewed();
        $data = $this->validate($request, [
            'user_id' => 'required',
            'story_id' => 'required',
        ]);
        $data['id'] = $id;
        $viewed_story->updateViewedStory($data);

        return redirect('/quanlytruyendaxem')->with('success', 'Cập nhật thành công!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viewed_story = Viewed::find($id);
        $viewed_story->delete();

        return redirect('/quanlytruyendaxem')->with('success', 'Đã xóa thành công!!');
    }
}