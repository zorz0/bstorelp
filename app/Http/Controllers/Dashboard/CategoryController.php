<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index (){
        $categories= Category::paginate(5);
        return view('admin.Categories.allCategories',['categories'=> $categories]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'name_engilsh' => 'required',

            'image' => 'required'
        ]);
        $imageName = md5(microtime()) . $request->image->getClientOriginalName();
        $request->image->storeAs("public/imgs", $imageName);
        Category::create([
            'name' => $request->name,
'name_engilsh'=>$request->name_engilsh,
            'image' => $imageName,

]);
return redirect(route('categories.index' ));
    }

    public function edit(Category $id){
       
        return view('admin.Categories.editCategoryForm',['category'=>$id ]);

    }

    public function create(){
        return view('admin.Categories.addCategoryForm');

    }
    public function update(Request $request, Category $id)
    {
        $categories = Category::all();

        if ($request->image) {

            $imageName = md5(microtime()) . $request->image->getClientOriginalName();
            $request->image->storeAs("public/imgs", $imageName);
            Category::where('id', $id->id)->update(
                [
                    'name' => $request->name,
                    'name_engilsh'=>$request->name_engilsh,
                    'image' => $imageName,

                ]
            );
        } else {
            Category::where('id', $id->id)->update(
                [
                    'name' => $request->name,
                    'name_engilsh'=>$request->name_engilsh,
                ]
            );
        }
        return redirect(route('categories.index' ));

    }

    public function destroy(Category $id)
    {

        Category::where('id', $id->id)->delete();

        return back();
    }

 

}
