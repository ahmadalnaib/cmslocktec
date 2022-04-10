<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    

    public function index()
    {
        $actions=Action::with('user','category')->paginate(10);
        return view('admin.actions.all',compact('actions'));
    }


    public function edit($id)
    {
        $action=Action::find($id);
        return view('admin.actions.edit',compact('action'));
    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}
