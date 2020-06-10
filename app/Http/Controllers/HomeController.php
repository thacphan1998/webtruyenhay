<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Story;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $categories = Category::all();
        $storyRecommend = Story::orderBy('created_at', 'DESC')->limit(3)->get();
        $storyVip= Story::orderBy('number_of_reads', 'DESC')->limit(8)->get();
        return view('frontend/home',compact('categories', 'storyRecommend', 'storyVip'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        //---> Lay slug from url
        $pathURL = $_SERVER['REQUEST_URI'];
        $listPath = explode("/", $pathURL);
        //---? lay slug
        $slug = $listPath[count($listPath)-1];
        //---> lay category by slug
        $currentCategory = Category::where('slug', $slug )->get()[0];

        $listStoriesByCate = Story::where('category_id', $currentCategory->id)->get();
        //---> Lay all categories
        $categories = Category::all();
        
        return view('frontend/category',compact('categories', 'currentCategory', 'listStoriesByCate'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function story()
    {

        //---> Lay slug from url
        $pathURL = $_SERVER['REQUEST_URI'];
        $listPath = explode("/", $pathURL);
        //---? lay slug
        $slug = $listPath[count($listPath)-1];
        //---> lay category by slug
        $currentStory = Story::where('slug', $slug )->get()[0];

        $categories = Category::all();
        
        return view('frontend/story', compact('categories', 'currentStory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storyDetails()
    {

        //---> Lay slug from url
        $pathURL = $_SERVER['REQUEST_URI'];
        $listPath = explode("/", $pathURL);
        //---? lay slug
        $slug = $listPath[count($listPath)-1];
        //---> lay category by slug
        $currentStory = Story::where('slug', $slug )->get()[0];

        $categories = Category::all();
        
        return view('frontend/story_detail', compact('categories', 'currentStory'));
    }
}
