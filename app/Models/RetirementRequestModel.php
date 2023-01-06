<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetirementRequestModel extends Model
{
    use HasFactory;
    protected $table = "retirement_req";
    protected $primarykey = "id";
}
