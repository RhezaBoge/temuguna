<?php


namespace App\Http\Controllers\Admin\database;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\table_project_issue;
use App\Library\authentication;
use Auth;
use DB;

class controller_project_issue extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $data=array(
            'project-issue' => table_project_issue::latest('project_issue_id')->paginate(10),
            'menu'   => 'tables',
            'submenu'   => 'projectissue'
         );


        return view('admin.database.project-issue.project-issue-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.database.project-issue.project-issue-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        table_project_issue::create(Request::all());
        return redirect('admin/project-issue')->with('success', 'Data successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $data = array(
                'project-issue' => table_project_issue::where('project_issue_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'projectissue'
         );     
        return view('admin.database.project-issue.project-issue-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           
         $data = array(
                'project-issue' => table_project_issue::where('project_issue_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'projectissue'
         );     
        return view('admin.database.project-issue.project-issue-edit', compact('data'));
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

        $dataUpdate = Request::all();
        $data = table_project_issue::find($id);
        $data->update($dataUpdate);
        return redirect('admin/project-issue')->with('warning', 'Data successfully changed!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        table_project_issue::find($id)->delete();
        return redirect('admin/project-issue')->with('warning', 'Data successfully removed!');
    
    }
}
