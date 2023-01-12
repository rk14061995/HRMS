<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function empSalarydetails(){
        return $this->belongsTo('App\Models\EmployeeSalary', 'emp_id', 'emp_id')
                    // ->where('status', 1)
                    ->where('salary_status', 1)
                    ->select('id','emp_id','basic_pay', 'ta_da', 'hra', 'tpt', 'pers_pay', 'govt_perks','salary_status');
    }
    public function post(){
        return $this->hasOne('App\Models\EmployeeSalary', 'emp_id', 'emp_id');
    }

}
