<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpLeaveModel extends Model
{
    use HasFactory;
    protected $table = "emp_leave";
    protected $primarykey = "id";
}
