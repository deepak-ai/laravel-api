<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //Create Department API
    public function createDepartment(Request $request){

       

        //validation
        $this->validate($request, [
            'name'=> 'required|unique:departments'
        ]);
        
        //create data

        $department = new Department();

        $department->name = $request->name;
        if(isset($request->description) && !empty($request->description)){
            $department->description = $request->description;
        }else{
            $department->description = "";
        }

        $flag = $department->save();


        //send response
        if($flag){
            return response()->json(["status" => $flag, "message"=>"Department created successfully"], 200);
        }else{
            return response()->json(["status" => $flag, "message"=>"There is some problem in creating department"], 501);

        }

    }
    
    //Show data of all Departments API
    public function listDepartments(){

        $departments = Department::get();

        if(!empty($departments)){
            return response()->json(["status" => true, "message"=>"Listing departments", "data"=>$departments], 200);
        }else{
            return response()->json(["status" => false, "message"=>"There is some problem in fetching departments"], 501);

        }


    }
    

    //Show details of single Department
    public function getSingleDepartment($id){
        if(Department::where('id',$id)->exists()){
            $department = Department::where('id',$id)->first();
            return response()->json(["status" => true, "message"=>"Department Found", "data"=>$department], 200);
 
         }else{
             return response()->json(["status" => false, "message"=>"Department with this ID does not exist"], 404);
         }
        
    }
    
    
    //UpdateDepartment API
    public function updateDepartment(Request $request, $id){
        if(Department::where('id',$id)->exists()){
            $department = Department::find($id);
            $department->name = !empty($request->name) ? $request->name : $department->name;
            $department->description = !empty($request->description) ? $request->description : $department->description;
            $flag = $department->save();
            if($flag){
                return response()->json(["status" => true, "message"=>"Department Updated succsessfully"], 200);
            }else{
                return response()->json(["status" => false, "message"=>"There is some problem in updating the department"], 501);
            }
 
         }else{
             return response()->json(["status" => false, "message"=>"Department with this ID does not exist"], 404);
         }

    }
    

    //Delete Department API
    public function deleteDepartment($id){

        if(Department::where('id',$id)->exists()){
            $department = Department::find($id);
            $flag = $department->delete();
            if($flag){
                return response()->json(["status" => true, "message"=>"Department deleted succsessfully"], 200);
            }else{
                return response()->json(["status" => false, "message"=>"There is some problem in deleting the department"], 501);
            }
 
         }else{
             return response()->json(["status" => false, "message"=>"Department with this ID does not exist"], 404);
         }

    }


    public function searchDepartment($term){

        $departments = Department::where('name','LIKE','%'.$term.'%')->get();

        if(count($departments) > 0){
            return response()->json(["status" => true, "message"=>"Search results are", "data"=>$departments], 200);
        }else{
            return response()->json(["status" => false, "message"=>"No Department Found"], 404);
        }


    }
}
