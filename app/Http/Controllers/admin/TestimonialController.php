<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;

    public function tes()
            {
                $testimonials =Testimonial::select()->get();
                return view('admin.testimonials' , compact('testimonials'));

            }



    public function addTesForm()
            {
                return view('admin.add_testimonial');
            }



    public function addTes(Request $request)
            {
                $message=[

                    'Name.string'=>' Topic Title is string',
                    'Name.required'=>' Topic Title is required',
                    'Content.required'=>' Topic Content is required',
                    'Content.max'=>' Topic Content max is 100 words',
                    'Image.required'=>' Topic image is required',
                    'Image.mimes'=>' Topic image not supported',
                    ];

                $data= $request->validate([
                    'Name'=>'required|string',
                    'Content'=>'required|string|max:300',
                    'Image' =>'required|max:2048|mimes:png,jpg,jpeg'
                ] , $message);

                $data['Published']=isset($request->Published);
                $data['Image']= $this->uploadFile($request->Image ,'assets/admin/images/testimonials/');
                //dd($data);
                Testimonial::create($data);
                return redirect()->route('tes')->with('added' ,'you inserted new Testimonial successfully');
            }


    public function editTesForm(string $id)
            {
          $testimonial = Testimonial::findOrFail($id);
          return view ('admin.edit_testimonial' , compact('testimonial'));
            }


    public function updateTes(Request $request , string $id)
            {

                $testimonial=Testimonial::findOrFail($id);
                //dd($testimonial);
                $message=[

                    'Name.string'=>' Topic Title is string',
                    'Name.required'=>' Topic Title is required',
                    'Content.required'=>' Topic Content is required',
                    'Content.max'=>' Topic Content max is 100 words',
                    'Image.required'=>' Topic image is required',
                    'Image.mimes'=>' Topic image not supported',
                    ];

                $data= $request->validate([
                    'Name'=>'required|string',
                    'Content'=>'required|string|max:300',
                    'Image' =>'max:2048|mimes:png,jpg,jpeg'
                ] , $message);

                $data['Published']=$request->Published;

                if ($request->hasFile('Image')) {
                $data['Image']= $this->uploadFile($request->Image ,'assets/admin/images/testimonials/');
                }
                else {

                    $data['Image'] = $testimonial['Image'];
                    }
                //dd($data);
                    Testimonial::where('id', $id)->update($data);

                    return redirect()->route('tes')->with('updated' ,'you updated Testimonial successfully');
            }


    public function DelTes(string $id)
            {
                Testimonial::where('id',$id)->delete();
                return redirect()->route('tes')->with('deleted' ,'you deleted Testimonial successfully');
            }



}
