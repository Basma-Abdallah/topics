<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{


    public function testimonials()
    {
        $testimonials= Testimonial::where('Published' , '1')->get();
        //dd($testimonials);
        return view ('public.testimonials' , compact('testimonials'))->with('title', 'Testimonials');;
    }


    public function topicsList()
    {
        //$topics= Topic::where('Published' , '1')->get();
        $topics = Topic::where('Published' , '1')->orderBy('created_at', 'desc')->paginate(3);
        $topicA = Topic::where(['Published'=> '1' , 'Trending'=> '1'])->orderBy('updated_at', 'desc')->offset(0)->limit(1)->get();
        $topicB = Topic::where(['Published'=> '1' , 'Trending'=> '1'])->orderBy('updated_at', 'desc')->offset(1)->limit(1)->get();
        //dd($topicA);
        return view ('public.topics-listing', compact('topics','topicA','topicB'))->with('title', 'Topics Listing');;
    }



     public function index()
      {
            $testimonials= Testimonial::where('Published' , '1')->orderBy('updated_at', 'desc')->offset(0)->limit(3)->get();

            $topicsA =Topic::where(['Published'=> '1'])->orderBy('created_at', 'desc')->offset(0)->limit(1)->get();
            $topicsB =Topic::where(['Published'=> '1'])->orderBy('created_at', 'desc')->offset(1)->limit(1)->get();
            $Categories = Category::all(); // Fetch all categories
            foreach ($Categories as $category) {
                $topics = $category->topics; // This will lazily load topics for each category
                                               }


             //dd($Categories);

            //dd($topicA,$topicB);

            return view('public.index' , compact('testimonials' , 'topicsA' , 'topicsB' ,'Categories'));
      }


      public function browseTopics( string $id)
    {
        $topics = Topic::where('Category_id' , $id)->offset(0)->limit(3)->get();
        return view ('public.index', compact('topics'));
    }

      public function topicsDetails( string $id)
    {
        $topic = DB::table('categories')
                    ->join('topics', 'categories.id', '=', 'topics.Category_id')
                    ->select('topics.*', 'categories.CategoryName as CategoryName')
                    ->where(['Published'=> '1' , 'topics.id' => $id ])
                    ->get();


        //dd($topic);
        return view ('public.topics-detail', compact('topic'))->with('title', 'Topic Details');;
    }

    public function markAsRead($id)
    {
        $topic = Topic::findOrFail($id);

        // If already marked, decrease the view count and unmark it
        if (session()->has('marked_' . $id)) {
            $topic->decrement('NumberOfViews');
            session()->forget('marked_' . $id); // Unmark the topic in session
        } else {
            // Otherwise, increase the view count and mark it
            $topic->increment('NumberOfViews');
            session()->put('marked_' . $id, true); // Mark the topic in session
        }

        return redirect()->back()->with('success', 'Topic view updated.');
    }
}
