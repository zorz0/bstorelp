<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
{
        // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index (){
        $blogs= Blog::paginate(3);
        return view('admin.Posts.allPosts',['blogs'=> $blogs]);
    }

 public function create()
{
    return view('admin.Posts.addPost');
}


    public function store (Request $request){
// dd(auth()->user()->id);
$request->validate([
    'title' => 'required',
    'image' => 'required'
]);
$imageName=md5(microtime()).$request->image->getClientOriginalName();
$request->image->storeAs("public/imgs",$imageName);
Blog::create([
    'user_id'=>auth()->user()->id,
    'title' => $request->title,
    'image' => $imageName,
    'description'=>$request->description,

]);
$blogs=Blog::paginate(5);
        return redirect(route('posts.index' ,[ 'blogs'=>$blogs]));
    }

    public function edit(Blog $id){

        return view("admin.Posts.editPost",['blog'=>$id ]);

    }

    public function update(Request $request, Blog $id){
        $blogs= Blog::paginate(5);

        if($request->image ){

            $imageName=md5(microtime()).$request->image->getClientOriginalName();
            $request->image->storeAs("public/imgs",$imageName);
            Blog::where('id',$id->id)->update(
                [ 'title'=> $request->title,
                'image'=> $imageName,

            ]);
        }else{
            Blog::where('id',$id->id)->update(
                [ 'title'=> $request->title,

            ]);
        }
        return redirect(route('posts.index' ,[ 'blogs'=>$blogs]));

    }

    public function destroy(Blog $id){

        Blog::where('id',$id->id)->delete();

        return back();

    }
    public function homeBlog()
    {
        $latestBlogs=Blog::orderBy('id','desc')->take(3)->get();
        dd($latestBlogs);
        return view('front.home',compact('latestBlogs'));
    }

}
