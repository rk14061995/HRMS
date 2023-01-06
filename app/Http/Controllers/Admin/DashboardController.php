<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view("admin.index");

    }

    public function status()
    {
          return view("admin.EmpolyeeStatus");
    }
    
    public function attendance()
    {
          return view("admin.Attendance");
    }
 
    public function medical()
    {
       return view("admin.medicalsheet");
    }
 
    public function leave()
    {
        
       return view("admin.leaveapproal");
    }

    public function regulancer()
    {
       return view("admin.AttendanceRegulancer");  
    }

    public function contact()
    {
       return view("admin.contact");  
    }

    public function portfolio()
    {
       return view("admin.portfolio");  
    }
    public function adminpermission()
    {
       return view("admin.adminpermission");  
    }
}
