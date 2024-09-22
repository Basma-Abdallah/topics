<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function cat()
            {
                $categories=Category::select()->get();
                return view('admin.categories' , compact('categories'));
            }


    public function addCatForm()
            {

                return view('admin.add_category');
            }


    public function addCat(request $request)
            {
                $message=[
                    'CategoryName.required'=>'Category Name is required , please enter before submit form ',
                    'CategoryName.unique'=>'Category Name is unique , please enter different Category ',
                    'CategoryName.max'=>'Category Name  max size is 200 charcter ',
                ];
                $data=$request->validate([
                    'CategoryName'=>'required|unique:categories,CategoryName|Max:200',
                ], $message);
                Category::create($data);
                return redirect()->route('cat')->with('sucess' ,'you inserted new Category successfully');


            }


    public function editCatForm(string $id)
            {
                $Categories=Category::findOrFail($id);
                return view('admin.edit_category' , compact('Categories'));
            }


    public function updateCat(request $request , string $id)
            {

                $message=[
                    'CategoryName.required'=>'Category Name is required , please enter before submit form ',
                    'CategoryName.unique'=>'Category Name is unique , please enter different Category ',
                    'CategoryName.max'=>'Category Name  max size is 200 charcter ',
                    ];
                $data=$request->validate([
                    'CategoryName'=>'required|unique:categories,CategoryName|Max:200',
                                ], $message);
                Category::where('id', $id)->update($data);

                return redirect()->route('cat')->with('sucess' ,'you inserted new Category successfully');


            }

    Public Function delCat(string $id)
            {

                $category = Category::find($id);

                // Check if there are related topics
                if ($category->topics()->exists()) {
                    return redirect()->route('cat')->with('no' ,'Cannot delete category because it has related topics.');
                }

                // Proceed to delete if no related topics
                $category->delete();
                //Category::where('id',$id)->delete();
                return redirect()->route('cat');

            }
}
