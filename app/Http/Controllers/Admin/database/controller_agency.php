<?php


namespace App\Http\Controllers\Admin\database;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\table_agency;
use App\Library\authentication;
use Auth;
use DB;

class controller_agency extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $data=array(
            'agency' => table_agency::latest('agency_id')->paginate(10),
            'menu'   => 'tables',
            'submenu'   => 'agency',
         );


        return view('admin.database.agency.agency-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.database.agency.agency-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        table_agency::create(Request::all());
        return redirect('admin/agency')->with('success', 'Data successfully added!');
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
                'agency' => table_agency::where('agency_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'agency'
         );     
        return view('admin.database.agency.agency-show', compact('data'));
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
                'agency' => table_agency::where('agency_id', '=', $id)->get(),
                'menu'   => 'tables',
                'submenu'   => 'agency'
         );     
        return view('admin.database.agency.agency-edit', compact('data'));
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
        $data = table_agency::find($id);
        $data->update($dataUpdate);
        return redirect('admin/agency')->with('warning', 'Data successfully changed!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        table_agency::find($id)->delete();
        return redirect('admin/agency')->with('warning', 'Data successfully removed!');
    
    }
}
