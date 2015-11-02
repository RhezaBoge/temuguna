<?php


namespace App\Http\Controllers\Admin\database;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\table_users_detail;
use App\Http\Controllers\Controller;
use App\Library\authentication;
use Auth;
use DB;

class controller_users_detail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $data=array(
            'users_detail' => table_project_category::latest('users_detail_id')->paginate(10),
         );


        return view('admin.database.users_detail.users_detail-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.database.users_detail.users_detail-create');
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
        return redirect('admin/users-detail')->with('success', 'Data berhasil ditambahkan!');
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
                'users_detail' => table_project_category::where('users_detail_id', '=', $id)->get(),
         );     
        return view('admin.database.users_detail.users_detail-show', compact('data'));
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
                'users_detail' => table_project_category::where('users_detail_id', '=', $id)->get(),
         );     
        return view('admin.database.users_detail.users_detail-edit', compact('data'));
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
        return redirect('admin/users-detail')->with('message', 'Data berhasil dirubah!');
    
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
        return redirect('admin/users-detail')->with('warning', 'Data berhasil dihapus!');
    
    }
}
