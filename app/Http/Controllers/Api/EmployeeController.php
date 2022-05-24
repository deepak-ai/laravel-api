<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //Create Employee API - POST
    public function createEmployee(Request $request){
        
        //validate
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone_no' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'department_id'=> 'required'
        ]);

        //create Employee
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_no = $request->phone_no;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->department_id = $request->department_id;

       
        $flag = $employee->save();

        //send response
        if($flag){
            return response()->json(["status" => $flag, "message"=>"Employee created successfully"], 200);
        }else{
            return response()->json(["status" => $flag, "message"=>"There is some problem in creating employee"], 501);

        }


    }
    
    //Show data of all Employees API - GET
    public function listEmployees(){

        $employees = Employee::get();
       
        if($employees != null){
            return response()->json(["status" => true, "message"=>"Listing Employees", "data"=>$employees], 200);
        }else{
            return response()->json(["status" => false, "message"=>"There is some problem in fetching employees"], 501);

        }


    }
    

    //Show details of single Employee - GET
    public function getSingleEmployee($id){
        if(Employee::where('id',$id)->exists()){
            $employee = Employee::where('id',$id)->first();
            return response()->json(["status" => true, "message"=>"Employee Found", "data"=>$employee], 200);
 
         }else{
             return response()->json(["status" => false, "message"=>"Employee with this ID does not exist"], 404);
         }
 

    }
    
    
    //Update Empoyee API - PUT
    public function updateEmployee(Request $request, $id){

        if(Employee::where('id',$id)->exists()){
            $employee = Employee::find($id);
            $employee->name = !empty($request->name) ? $request->name : $employee->name;
            $employee->email = !empty($request->email) ? $request->email : $employee->email;
            $employee->phone_no = !empty($request->phone_no) ? $request->phone_no : $employee->phone_no;
            $employee->gender = !empty($request->gender) ? $request->gender : $employee->gender;
            $employee->age = !empty($request->age) ? $request->age : $employee->age;
            $employee->department_id = !empty($request->department_id) ? $request->department_id : $employee->department_id;
            $flag = $employee->save();
            if($flag){
                return response()->json(["status" => true, "message"=>"Successfully updated the employee details"], 200);
            }else{
                return response()->json(["status" => false, "message"=>"There is some problem in updating the employee detail"], 501);
            }
 
         }else{
             return response()->json(["status" => false, "message"=>"Employee with this ID does not exist"], 404);
         }

    }
    

    //Delete Employee API - DELETE
    public function deleteEmployee($id){

        if(Employee::where('id',$id)->exists()){
            $employee = Employee::find($id);
            $flag = $employee->delete();
            if($flag){
                return response()->json(["status" => true, "message"=>"Successfully deleted the employee details"], 200);
            }else{
                return response()->json(["status" => false, "message"=>"There is some problem in deleting the employee detail"], 501);
            }
 
         }else{
             return response()->json(["status" => false, "message"=>"Employee with this ID does not exist"], 404);
         }

    }
}
