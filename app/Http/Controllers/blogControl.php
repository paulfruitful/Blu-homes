<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogs=blog::paginate(4);
        return view('pages.blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'picture'=>'required']);
            $blog= new blog;
            $blog->title=$request->title;
            $blog->body=$request->body;
            $blog->user_id=auth()->id();
            if($request->hasFile('picture')){
                $blog['pics']=$request->file('picture')->store('blog_photos','public');
            }
            $blog->save();
        return redirect('/dashboard')->with('Success','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        
        return view('pages.show',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        
        return view('pages.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {         
        $form_data=    $request->validate([ 
            'title'=>'required',
        'body'=>'required']);
       
        if($request->hasFile('picture')){
            $form_data['pics']=$request->file('picture')->store('blog_photos','public');
        }
        $blog->update($form_data);

        return redirect('/blog/'.$blog->id)->with('Success','Post Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=blog::find($id);
        $blog->destroy($blog->id);
        return redirect('/blog')->with('Success','Post Deleted Successfully');
 
        //
    }
}
