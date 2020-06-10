<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $user->saveUser($data);
        return redirect('/quanlynguoidung')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('edit_user', compact('user', 'id'));
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
        $user = new User();
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $data['id'] = $id;
        $user->updateUser($data);

        return redirect('/quanlynguoidung')->with('success', 'User has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/quanlynguoidung')->with('success', 'User has been deleted!!');
    }
}
