<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\students;

class student extends Controller
{

    //function to return addUser view
    function returnAddUserView(){
        return view('addUser');
    }

    //function to insert new users details 
    function addUserDetails(Request $request){

        
        //validate
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:students',
            'phone'=>'required|unique:students',
            'nic'=>'required|unique:students'
        ]);
        //if it is valid it will proceed
        //if not valid throw validation exception

        
        // dd($request->all());


        $student=new students;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->nic=$request->nic;
        $student->save();
        return redirect()->back()->with('Success',"Student $student->name Inserted Successfully");

    }

    //function to return viewUsers view
    function returnViewUsers(){
        //fetch data from database using $data variable
        $data=students::all();
        return view('viewUsers')->with('data',$data);
    }

    //function to delete a user
    //find a record with user id
    function deleteUser($id){
        $data  = students::find($id);
        $deletedName = $data->id; // Store the ID before deletion
        $data->delete();
        return redirect()->back()->with('Delete',"Student id=$deletedName deleted");

    }

    //function to edit a user
    //find a record with user id
    function editUser($id){
        //fetch data from database using $data variable
            $data = students::find($id);
            return view('editUser')->with('data', $data);
    }

    //function to update user
    public function updateUser(Request $request,$id){

       
        // dd($request->all());

        //fetch data from database using $data variable
        $data = students::find($id);
        $input = $request->all();
        $data->update($input);

        $name = $request->query('name');

        // Flash a session message
        // session()->flash('Update', "Id=$id Updated");
        // //  Call the function to return the viewUsers view
        // return $this->returnViewUsers();
        // Redirect back to the viewUsers page
        return redirect('/viewUsers')->with('Update', "Id=$id $name Updated");
    } 

    



}


