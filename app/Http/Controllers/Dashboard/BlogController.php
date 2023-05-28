<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\BlogImage;


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


public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required'
    ]);

    $imageName = md5(microtime()) . $request->image->getClientOriginalName();
    $request->image->storeAs("public/imgs", $imageName);

    $blog = Blog::create([
        'user_id' => auth()->user()->id,
        'title' => $request->title,
        'title_english' => $request->title_english,
        'image' => $imageName,
        'description' => $request->description,
        'description_english' => $request->description_english,
    ]);

    if ($request->hasFile('all_image')) {
        $uploadedImages = [];
    
        foreach ($request->file('all_image') as $file) {
            // Store the uploaded file
            $path = $file->store('public/imgs'); // Adjust the storage path as needed
    
            // Remove "public/imgs" from the path
            $path = str_replace('public/imgs/', '', $path);
    
            // Create a new BlogImage model and save the file path
            $image = new BlogImage();
            $image->image = $path;
            $image->blog_id = $blog->id;
    
            $image->save();
    
            // Add the file path to the uploadedImages array
            $uploadedImages[] = $path;
        }
    }
    

    $blogs = Blog::paginate(5);
    return redirect(route('posts.index', ['blogs' => $blogs]));
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
                [ 
                'title'=> $request->title,
                'title_english'=> $request->title_english,
                'description'=>$request->description,
                'description_english'=>$request->description_english,
                'image'=> $imageName,

            ]);
            if ($request->hasFile('all_image')) {
                BlogImage::where('blog_id', $id->id)->delete();

                $uploadedImages = [];
            
                foreach ($request->file('all_image') as $file) {
                    // Store the uploaded file
                    $path = $file->store('public/imgs'); // Adjust the storage path as needed
            
                    // Remove "public/imgs" from the path
                    $path = str_replace('public/imgs/', '', $path);
            
                    // Create a new BlogImage model and save the file path
                    $image = new BlogImage();
                    $image->image = $path;
                    $image->blog_id =$id->id;
            
                    $image->save();
            
                    // Add the file path to the uploadedImages array
                    $uploadedImages[] = $path;
                }
            }
            
        }else{
            Blog::where('id',$id->id)->update(
                [ 'title'=> $request->title,
                'title_english'=> $request->title_english,
                'description'=>$request->description,
                'description_english'=>$request->description_english,

            ]);
            if ($request->hasFile('all_image')) {
                BlogImage::where('blog_id', $id->id)->delete();

                $uploadedImages = [];
            
                foreach ($request->file('all_image') as $file) {
                    // Store the uploaded file
                    $path = $file->store('public/imgs'); // Adjust the storage path as needed
            
                    // Remove "public/imgs" from the path
                    $path = str_replace('public/imgs/', '', $path);
            
                    // Create a new BlogImage model and save the file path
                    $image = new BlogImage();
                    $image->image = $path;
                    $image->blog_id =$id->id;
            
                    $image->save();
            
                    // Add the file path to the uploadedImages array
                    $uploadedImages[] = $path;
                }
            }
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
