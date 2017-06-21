<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Auth;

class DashboardBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $blogs = Blog::get();
        return view('dashboard.blog.index', compact('blogs'));
    }

    public function new_post()
    {
        return view('dashboard.blog.new');
    }

    public function submit_post(Request $request)
    {
        if ($request->hasFile('featured_image')) {
            $input = $request->all();
            $input['user_id'] = Auth::user()->id;
            $image = $request->file('featured_image');
            $imageName = $image->getClientOriginalName();
            $input['featured_image'] = $imageName;
            $destinationPath = 'featured_image';
            $request->file('featured_image')->move($destinationPath, $imageName);
            $blog = Blog::create($input);

            return redirect()->route('blog-index');
        } else {
            return 'Featured image is required.';
        }

        return $blog;
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog-index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('dashboard.blog.edit', compact('blog'));
    }

    public function update(Request $request)
    {

        $input = $request->all();
        $blog = Blog::findOrFail($input['id']);

        if ($blog->user_id != Auth::user()->id) {
            return 'Not allowed bitch!';
        }
        
        if ($request->hasFile('featured_image')) {

            $image = $request->file('featured_image');
            $imageName = $image->getClientOriginalName();
            $input['featured_image'] = $imageName;
            $destinationPath = 'featured_image';
            $request->file('featured_image')->move($destinationPath, $imageName);
        
        }

        $blog->update($input); 
        return redirect()->route('blog-index');

    }

}
