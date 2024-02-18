<?php

namespace App\Http\Controllers;
use App\Models\StdModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function homeform(Request $request){
        $request->validate([
            'fullname' => 'required',
            'class' => 'required',
            'faculty' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);
        
        $table = new StdModel();
        $table->std_name = $request['fullname'];
        $table->std_class = $request['class'];
        $table->std_faculty = $request['faculty'];
        $table->std_email = $request['email'];
        $table->std_password = $request['password'];
        $table->save();
        return view('welcome');
    }

    public function std_view(){
        $data = stdmodel::all(); 
        return view('viewdata')->with(compact('data'));
    }

    public function std_del($id){
        $std_delete = stdmodel::find($id);
        if(!is_null($std_delete)){
            $std_delete->delete();
            return redirect('/viewdata');
        }else {
            return redirect('/viewdata');
        }
        
    }

    public function std_update($id){
        $std_update = StdModel::find($id);
        if(!is_null($std_update)) {
            return redirect('/std-update')->with(compact('std_update'));

        }else {
            return redirect('/viewdata');
        }  
    }

    // public function std_update_data($id, Request $request){
        
    //     $edit_table_data = StdModel::find($id);
    //     $edit_table_data->std_name = $request['fullname'];
    //     $edit_table_data->std_class = $request['class'];
    //     $edit_table_data->std_faculty = $request['faculty'];
    //     $edit_table_data->std_email = $request['email'];
    //     $edit_table_data->save();
    //     return redirect("/viewdata");

    // }
}
