<?php


namespace App\Http\Controllers\Admin\database;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\table_project_category;
use App\Library\authentication;
use Auth;
use DB;

class controller_project_category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $data=array(
            'project-category' => table_project_category::latest('project_category_id')->paginate(10),
            'menu'   => 'tables',
            'submenu'   => 'projectcategory',
         );


        return view('admin.database.project-category.project-category-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.database.project-category.project-category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        table_project_category::create(Request::all());
        return redirect('admin/project-category')->with('success', 'Data successfully added!');
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
                'project-category' => table_project_category::where('project_category_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'projectcategory'
         );     
        return view('admin.database.project-category.project-category-show', compact('data'));
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
                'project-category' => table_project_category::where('project_category_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'projectcategory'
         );     
        return view('admin.database.project-category.project-category-edit', compact('data'));
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
        $data = table_project_category::find($id);
        $data->update($dataUpdate);
        return redirect('admin/project-category')->with('warning', 'Data successfully changed!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        table_project_category::find($id)->delete();
        return redirect('admin/project-category')->with('warning', 'Data successfully removed!');
    
    }
}
