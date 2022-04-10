<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\User;
use App\Traits\ImageUploadTrait;

class ActionController extends Controller
{

    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions=Action::with('category:id,title')->whereApproved(true)->latest()->get();
        return view('action',compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile('image')){
            $image_name = $this->uploadImage($request->image);
        }

        $request->user()->actions()->create($request->all()+['image_path'=>$image_name ?? 'default.jpg']);

        return back()->with('success',trans('alerts.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        return view('show',compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        return view('edit',compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Action $action)
    {
     

        if($request->hasFile('image')){
             $path = public_path().'/uploads/images/';
 
             //لازالة الصورة القديمة
             if($action->file != ''  && $action->file != null){
                  $file_old = $path.$action->file;
                  unlink($file_old);
 
 
             //رفع الصورة الجديدة
             $file = $request->file;
             $filename = $file->getClientOriginalName();
             $file->move($path, $filename);
           }
             //لعمل تحديث للجدول
             $action->update(['file' => $filename]);
 
        }
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
}
