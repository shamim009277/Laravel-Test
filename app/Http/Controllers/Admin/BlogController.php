<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use DB;
use Session;
use Response;
use Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return view('admin.content.List',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.add_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('link')) {
           
            $validator = Validator::make($request->all(),[
                'title'=>'required | unique:blogs',
                'type'=>'required',
                'section'=>'required',
                'description'=>'required',
                'image'=>'required',
                'link'=>'required | unique:blogs'
            ]);

        }else{
            $validator = Validator::make($request->all(),[
            
                'title'=>'required | unique:blogs',
                'type'=>'required',
                'section'=>'required',
                'description'=>'required',
                'image'=>'required'
                
            ]);
        }

        if($validator->fails())
        {
            $plainErrorText = "";
            $errorMessage = json_decode($validator->messages(), True);
            foreach ($errorMessage as $value) { 
                $plainErrorText .= $value[0].". ";
            }
            Session::flash('flash_message', $plainErrorText);
            return redirect()->back()->withErrors($validator)->withInput()->with('status_color','warning');
        }
        
        $input = $request->all();
        //return $input;
        $input['title'] = $request->title;
        $input['type'] = $request->type;
        $input['section'] = $request->section;
        $input['description'] = $request->description;
        $input['link'] = $request->link;
        $input['status'] = 1;

        $image = $request->file('image');
        if ($image) {
            //$img_name = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = uniqid().".".$ext;
            $image_path = 'images/';
            $image_url = $image_path.$image_full_name;
            $success=$image->move($image_path,$image_full_name);
            if ($success) {
                $input['image'] = $image_full_name;
            }            
        }else{
            $input['image'] = 'default.png';
        }

        try{
            $bug = 0;
            $insert = Blog::create($input);
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        
        if($bug==0){
        Session::flash('flash_message','Blogs Added Successfully !');
        return redirect('/blog')->with('status_color','success');
        }else{
        Session::flash('flash_message','Something Error Found.');
        return redirect('/blog')->with('status_color','danger');
        }


        //$insert = Blog::create($input);

        //dd($input);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function unactivePost($post_id){

        DB::table('blogs')
              ->where('id',$post_id)
              ->update(['status'=>0]);


        Session::flash('flash_message','Status Changed Successfully !');
        return redirect()->back()->with('status_color','success');
        

    }

    public function activePost($post_id){

        DB::table('blogs')
              ->where('id',$post_id)
              ->update(['status'=>1]);

        Session::flash('flash_message','Status Changed Successfully !');
        return redirect()->back()->with('status_color','success');

    }

}
