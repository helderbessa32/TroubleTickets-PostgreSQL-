<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\User;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Member::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $validated = $request->validate([
            'coordinator' => 'required',
            'user_id' => 'required|integer',
            'idProject' => 'nullable'
        ]);
        $member = Member::create($validated);
        return $member;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberRequest $request)
    {
        $member = Member::create($request);
        return $member;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function memberCreateProject(Request $request){
       
        $request['grade'] = 0;
        $request['archive'] = false;
        $request['idSubject'] = 1;
        $request['coordinator'] = true;
        $project = Project::create([
            'name' => $request->name,
            'details' => $request->details,
            'subject'=> $request->subject,
            'grade' => $request->grade,
            'archive' => $request->archive
        ]);
        $project_id = $project->id;
        $userId= Auth::user()->id;
        $request['user_id'] = $userId;
        $request['project_id'] = $project_id;
        $member = Member::create([
            'coordinator' => $request->coordinator,
            'user_id' => $request->user_id,
            'project_id' => $request->project_id
        ]);
        return redirect('login');
    }


    public function list(){
          if (!Auth::check()) return redirect('/login');

          $projects = $this->showProjectsMember(Auth::user()->id);
          return view('pages/projectslist', compact('projects'));
        
    }

    public function showProjectsMember($id){
        if($id == 1){
            $datas = User::
                join('members','users.id','members.user_id')
                ->join('project','members.project_id','project.id')
                ->select('project.id','project.name','project.grade','project.details')->get();
                return $datas;
        }


        $members = Member::select('user_id','project_id')->where('user_id','=',$id)->get();
        
        $response = array();
        foreach($members as $member){
               
            $datas = Project::select('id','name','grade','details')
                            ->where('id','=', $member->project_id)->get(); 
            $response[] = $datas[0];
            // $datas = Member::
                // join('members','members.user_id','=',$member->user_id)
                // ->join('project','project.id', '=',$member->project_id)
                // ->select('project.id','project.name','project.grade','project.details')->first();
        }
        return $response;
         $datas = User::
                 join('members','members.user_id','=','users.id')
                 ->join('project','project.id', '=','members.project_id')
                 ->select('project.id','project.name','project.grade','project.details')->get();
                return $datas;
    }


    public function inviteMember($pid){
        $data = $pid;
        $data = User::all();

        return view('pages/joinMember',compact(['data','pid']));
    }


    public function joinMember(Request $request){
        $request['coordinator'] = false;
        $member = Member::create([
            'coordinator' => $request->coordinator,
            'user_id' => $request->user_id,
            'project_id' => $request->project
        ]);
        return redirect('login');

    }
}
