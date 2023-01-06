<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Manager\ManagerController;
use App\Models\Manager\Employeedetails;

class ManagerController extends Controller
{
    public function index()
    {
        
        return view("manager.index");

    }

    public function status()
    {
          return view("manager.EmpolyeeStatus");
    }
    
    public function attendance()
    {
          return view("manager.Attendance");
    }
 
    public function medical()
    {
       return view("manager.medicalsheet");
    }
 
    public function leave()
    {
        
       return view("manager.leaveapproal");
    }

    public function regulancer()
    {
       return view("manager.AttendanceRegulancer");  
    }

    public function contact()
    {
       return view("manager.contact");  
    }

    public function portfolio()
    {
       return view("manager.portfolio");  
    }

    public function addemp()
    {
       return view("manager.addempprofile");  
    }
    
    public function store(Request $request)
    {
        $post = new Employeedetails;
        $post->name = $request->get('name');
        $post->designation = $request->get('designation');
        $post->dob =$request->get('dob');
        $post->location = $request->get('location');
        $post->address = $request->get('address');
        $post->grade = $request->get('grade');
        $post->status = $request->get('status');
        $post->depandend = $request->get('depandend');
        $post->mobile = $request->get('mobile');
        $post->email = $request->get('email');
        $post->basicpay = $request->get('basicpay');
        $post->save();
        echo "Data Insert Sucessfully";
        return redirect(route('maddemp'));
    }
}
