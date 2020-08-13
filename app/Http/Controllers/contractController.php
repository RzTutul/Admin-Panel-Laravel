<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class contractController extends Controller
{
    //

	public function showdata()
	{
    	$allContact = DB::table('contracts')->get(); //featch all data from database

    	return view('layout.contract')->with('data',$allContact);
    }
    public function addDataInDB(Request $request)
    {
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['phone'] = $request->phone;
    	$data['address'] = $request->address;

    	$insert = DB::table('contracts')->insert($data);
    	return Redirect()->route('all.contract');
    }


    public function insertData()
    {
    	return view('layout.insert');
    } public function deleteData($id)
    {
    	$delete =DB::table('contracts')->where('id',$id)->delete();

    	  return Redirect()->route('all.contract');
    }

    public function editData($id)
    {
    	$edit =DB::table('contracts')->where('id',$id)->first();
    	return view('layout.editdata',compact('edit'));
    }

    public function updateContract(Request $request, $id)
    {
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['phone'] = $request->phone;
    	$data['address'] = $request->address;

    	$insert = DB::table('contracts')->where('id',$id)->update($data);
    	return Redirect()->route('all.contract');
    }



    public function viewData($id)
    {
    	$data =DB::table('contracts')->where('id',$id)->first();
    	return view('layout.sigleuserdata',compact('data'));
    }
    

}