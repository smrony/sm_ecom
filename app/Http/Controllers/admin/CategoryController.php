<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\admin\Category;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Category::latest()->get();

        return view('admin.category.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::latest()->get();

        return view('admin.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check if file is upload
        if($request->hasFile('image')){
          $image_name = time().'.'.$request->image->getClientOriginalExtension();
		  $request->image->move(('admin/category/'), $image_name);
        } 

        //create object of category class 
        //and access property
        $store = new Category; 

        $store->category_name=$request->category_name;

        $store->slug=Str::slug($request->category_name);

        $store->parent=$request->parent;

        $store->description=$request->description;

        $store->status=$request->status;

        $store->created_by=1; 

        $store->image=$image_name; //store image name in db column 

        $store->save();

        return redirect()->back();  //laravel built in method when data is store then back to previous page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=Category::find($id); //find is built in method 
        return view('admin.category.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Category::find($id); //find is built in method 
        return view('admin.category.edit',compact('edit'));
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
          $update = Category::find($id);

         //check if file is upload or not if not upload then default image
         if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('admin/category/'), $image_name);
          }else{
            $image_name= $update->image;
          } 

          $update->category_name=$request->category_name;

          $update->slug=Str::slug($request->category_name);

          $update->parent=$request->parent;

          $update->description=$request->description;

          $update->status=$request->status;

          $update->created_by=1;

          $update->image=$image_name; //store image name in db column 

          $update->save();

          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::find($id); //find is built in method 

        $delete->delete(); //delete is built in method
    }
}
