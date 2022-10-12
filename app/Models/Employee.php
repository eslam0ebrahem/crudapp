<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['name',"salary","department_id","dependent_id","img"];


    public function departments()
    {
        return $this->belongsTo(Department::class,"department_id","id");
    }
    public function dependents()
    {
        return $this->belongsTo(Dependent::class,"dependent_id","id");
    }
}
