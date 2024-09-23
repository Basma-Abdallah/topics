<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Traits\Common;

class TopicController extends Controller
{

    use Common;

    public function topics()
            {

            $topics = DB::table('categories')
                            ->join('topics', 'categories.id', '=', 'topics.Category_id')
                            ->select('topics.*', 'categories.CategoryName as CategoryName')
                            ->get();
                //dd($topics);
                return view('admin.topics', compact('topics'));
            }


    public function addTopicForm()
            {
            $categories= Category::select()->get();
            //dd($categories);
                return view('admin.add_topic' , compact('categories'));
            }

    public function addTopic(Request $request)
            {
                $message=[

                    'Title.string'=>' Topic Title is string',
                    'Title.required'=>' Topic Title is required',
                    'Content.required'=>' Topic Content is required',
                    'Content.max'=>' Topic Content max is 100 words',
                    'image.required'=>' Topic image is required',
                    'image.mimes'=>' Topic image not supported',
                    ];

                $data= $request->validate([
                'Title'=>'required|unique:topics,Title|string',
                'Content'=>'required|string|max:300',
                'image' =>'required|max:2048|mimes:png,jpg,jpeg'
                ] , $message);

                $data['Published']=isset($request->Published);
                $data['Trending']=isset($request->Trending);
                $data['NumberOfViews']=0;
                $data['Category_id']=$request->category;
                $data['image']= $this->uploadFile($request->image ,'assets/admin/images/topics/');
                //dd($data);
                Topic::create($data);
                return redirect()->route('topics')->with('sucess' ,'you inserted new Topic successfully');

            }


     public function topicDetails(string $id)
            {
                $topic=Topic::findOrfail($id);
                //dd($topic);
                return view('admin.topic_details' ,compact('topic'));
            }

    public function editTopic(string $id)
            {
                $topic=Topic::findOrFail($id);
                // dd($topic);
                $categories= Category::select()->get();
                return view('admin.edit_topic' ,compact('topic', 'categories'));
            }

    public function updateTopics(Request $request ,string $id)
            {

                $topic=Topic::findOrFail($id);
                // dd($topic);

                $message=[

                    'Content.max'=>' Topic Content max is 100 words',
                    'image.mimes'=>' Topic image not supported',
                    'image.max'=>' Topic image mak size 2 MB',
                    ];

                $data= $request->validate([
                'Title'=>'string',
                'Content'=>'string|max:300',
                ] , $message);

                $data['Published']=$request->Published;
                $data['Trending']=$request->Trending;
                $data['Category_id']=$request->Category_id;


                if ($request->hasFile('image')) {
                $data['image']= $this->uploadFile($request->image ,'assets/admin/images/topics/');
                }
                else {

                    $data['image'] = $topic['image'];
                }

            // dd($data);
                Topic::where('id', $id)->update($data);

                return redirect()->route('topics')->with('edited' ,'you edited Topic successfully');

            }

    Public Function TopicDelete(string $id)
            {

            Topic::where('id',$id)->delete();
            return redirect()->route('topics')->with('del' ,'you deleted Topic successfully');

            }


}
