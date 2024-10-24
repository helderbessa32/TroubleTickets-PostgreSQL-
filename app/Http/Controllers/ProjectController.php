<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|max:25',
            'grade' => 'nullable|integer',
            'details' => 'nullable',
            'subject' => 'required',
            'archived' => 'nullable|bool'
        ]);



    }

    public function showProject($id){
        $projectDatas = Project::select('id','name','grade','details', 'archive','subject')
                        ->where('id',$id)->get();
       
        return view('pages/projectPage',compact('projectDatas'));
    }
}
