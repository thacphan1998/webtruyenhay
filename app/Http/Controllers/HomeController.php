<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Story;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\DB;

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
        $storyVip = Story::orderBy('number_of_reads', 'DESC')->limit(8)->get();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        $storyNewUpdate = Story::orderBy('updated_at', 'DESC')->limit(20)->get();

        return view('frontend/home', compact('categories', 'storyRecommend', 'storyVip', 'storyHot', 'storyLatest', 'storyNewUpdate'));
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
        $slug = $listPath[count($listPath) - 1];
        //---> lay category by slug
        $currentCategory = Category::where('slug', $slug)->get()[0];

        $listStoriesByCate = Story::where('category_id', $currentCategory->id)->get();
        //---> Lay all categories
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();

        return view('frontend/category', compact('categories', 'currentCategory', 'listStoriesByCate', 'storyHot', 'storyLatest'));
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
        $slug = $listPath[count($listPath) - 1];
        //---> lay category by slug
        $currentStory = Story::where('slug', $slug)->get()[0];
        $user_id = Auth::user()->id;
        // Get comment
        $storyComments =  DB::table('comments')
        ->select('comments.*', 'users.name as username')
        ->join('users','users.id','=','comments.user_id')
        ->where(['users.id' => $user_id, 'story_id'=> $currentStory->id])
        ->distinct()
        ->get();//Comment::where(['story_id'=> $currentStory->id, 'user_id' => $user_id])->get();
        $categoryName = Category::where('id', $currentStory->category_id)->get()[0];
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        $storyList = Story::where('category_id', $currentStory->category_id)->limit(10)->get();
        return view('frontend/story', compact('categories', 'currentStory', 'categoryName', 'storyHot', 'storyLatest', 'storyList', 'storyComments'));
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
        $slug = $listPath[count($listPath) - 1];
        //---> lay category by slug
        $currentStory = Story::where('slug', $slug)->get()[0];
        Story::where('id', $currentStory->id)
            ->update(['number_of_reads' => $currentStory->number_of_reads + 1]);
        $categories = Category::all();
        $categoryName = Category::where('id', $currentStory->category_id)->get()[0];
        $storyList = Story::where([['category_id', '=', $currentStory->category_id], ['id', '<>', $currentStory->id]])->limit(10)->get();
        return view('frontend/story_detail', compact('categories', 'currentStory', 'categoryName', 'storyList'));
    }

    /**
     * Display a listing of the filer.
     *
     * @return \Illuminate\Http\Response
     */
    // show ra danh sách tìm kiếm
    public function searchStory(Request $request)
    {
        if ($request->has('query')) {
            $queryString  = $request->input('query');
            $storiesFiltered = Story::where('name', 'like', '%' . $queryString . '%')->get();
            $categories = Category::all();
            $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
            $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
            return view('frontend/story_search', compact('storiesFiltered', 'categories', 'storyHot', 'storyLatest'));
        }
    }

    public function latestStory()
    {
        $storiesUpdated = Story::orderBy('updated_at', 'DESC')->get();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_latest', compact('storiesUpdated', 'categories', 'storyHot', 'storyLatest'));
    }

    public function newPostStory(){
        $storiesNewPost = Story::orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_new_post', compact('storiesNewPost', 'categories', 'storyHot', 'storyLatest'));
    }

    public function viewMoreStory(){
        $storiesviewMore = Story::orderBy('number_of_reads', 'DESC')->get();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_view_more', compact('storiesviewMore', 'categories', 'storyHot', 'storyLatest'));
    }

    public function favouriteStory(){
        $storiesfavourite = Story::orderBy('number_of_reads', 'DESC')->get();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_favourite', compact('storiesfavourite', 'categories', 'storyHot', 'storyLatest'));
    }

    public function fullStory(){
        $storiesfull = Story::all();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_full', compact('storiesfull', 'categories', 'storyHot', 'storyLatest'));
    }

    public function vipStory(){
        $storiesvip = Story::orderBy('number_of_downloads', 'DESC')->get();
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();
        return view('frontend/story_vip', compact('storiesvip', 'categories', 'storyHot', 'storyLatest'));
    }

    public function login() {
        return view('frontend/login');
    }

    public function postLogin(Request $request){

        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'

        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu'
        ]);

        $checkLogin = User::where([['email', $request->email], ['password', $request->password]])->get();

        if($checkLogin){

            return redirect('/trang-chu');
        }else{

            return redirect('/dang-nhap')->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storyViewed(Request $request)
    {
        //---> Lay slug from url
        $user_id = $request->route('user_id');
        $list_story_viewed = DB::table('stories')
        ->select('stories.*')
        ->join('viewed','viewed.story_id','=','stories.id')
        ->where(['viewed.user_id' => $user_id])
        ->distinct()
        ->get();
        //---> lay category by slug
        // $currentCategory = Category::where('slug', $slug)->get()[0];

        // $listStoriesByCate = Story::where('category_id', $currentCategory->id)->get();
        //---> Lay all categories
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();

        return view('frontend/story_viewed', compact('categories','storyHot', 'storyLatest', 'list_story_viewed'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storyLiked(Request $request)
    {
        //---> Lay slug from url
        $user_id = $request->route('user_id');
        $list_story_liked = DB::table('stories')
        ->select('stories.*')
        ->join('liked_stories','liked_stories.story_id','=','stories.id')
        ->where(['liked_stories.user_id' => $user_id])
        ->distinct()
        ->get();

        //---> Lay all categories
        $categories = Category::all();
        $storyHot = Story::orderBy('number_of_downloads', 'DESC')->limit(10)->get();
        $storyLatest = Story::orderBy('created_at', 'DESC')->limit(10)->get();

        return view('frontend/story_liked', compact('categories','storyHot', 'storyLatest', 'list_story_liked'));
    }
}