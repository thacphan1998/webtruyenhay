<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Story;
use App\LikedStory;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number_of_reads = Story::sum('number_of_reads');
        $number_of_liked = LikedStory::all()->count();
        $total_stories = Story::all()->count();
        $total_users = User::all()->count();
        return view('dashboard', compact('number_of_reads', 'number_of_liked', 'total_stories', 'total_users'));
    }
}