<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{ public $timestamps = false;
    use HasFactory;
    protected $fillable = ['name'];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }}