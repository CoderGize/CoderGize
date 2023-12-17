<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function show_description(){
        $description = Description::latest()->paginate(10);
        return view('admin.description.show_description',compact('description'));
    }

    public function add_description(Request $request){

        $description = new Description;


        $description->project_id = $request->project_id;
        $description->project_nameen = $request->project_nameen;
        $description->project_namear = $request->project_namear;
        $description->titleen = $request->titleen;
        $description->titlear = $request->titlear;
        $description->texten = $request->texten;
        $description->textar = $request->textar;

        $description->save();


        return redirect()->back()->with('message','Description Added');

    }

    public function update_description($id){

        $description = Description::find($id);

        return view('admin.description.update_description',compact('description'));

    }

    public function update_description_confirm(Request $request,$id){

        $description = Description::find($id);


        $description->project_nameen = $request->project_nameen;
        $description->project_namear = $request->project_namear;
        $description->titleen = $request->titleen;
        $description->titlear = $request->titlear;
        $description->texten = $request->texten;
        $description->textar = $request->textar;


        $description->save();

        return redirect('/admin/show_description')->with('message', 'Description Updated');


    }



    public function delete_description($id){
        $description = Description::find($id);

        $description->delete();

        return redirect()->back()->with('message', 'Description Deleted');
    }
}
