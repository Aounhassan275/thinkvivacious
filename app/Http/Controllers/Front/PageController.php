<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function blog()
    {
        $blogs = Blog::paginate(5);
        return view('front.blog.index',compact('blogs'));
    }
    public function showBlognext($name)
    {
        $blog=Blog::where('name',str_replace('_', ' ',$name))->first();
        $id = $blog->id;
        $blog->update([
            'views' => $blog->views + 1
        ]);

        $blog=Blog::find($id);
       
        $comments = Comment::where('blog_id',$id)->get();
        return view('front.blog.show',compact('blog','comments'));
    }  
    public function category()
    {
        $categories = Category::paginate(10);
        return view('front.category.index',compact('categories'));
    }
    public function showCategorynext($name)
    {
        $category=Category::where('name',str_replace('_', ' ',$name))->first();
        $id = $category->id;
        $category=Category::find($id);
        $blogs=Blog::where('category_id',$id)->paginate(5);
        return view('front.category.show',compact('category','blogs'));
    }
    public function search(Request $request)
    {
       
   
       if($request->keyword){
               $this->blogs = Blog::Where('name', 'LIKE', '%' . $request->keyword . '%')->distinct()->paginate(5);
       }

       else
           $this->blogs = Blog::paginate(5);
       
       
       $keyword = $request->keyword?$request->keyword:'';

       return view('front.blog.search')
           ->with('Keyword', $keyword)
           ->with('blogs', $this->blogs);


    }
    
}
