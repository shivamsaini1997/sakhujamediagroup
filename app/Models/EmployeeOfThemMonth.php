<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeOfThemMonth extends Model
{
    use HasFactory;
    protected $table = 'employee_of_the_month';
    protected $primaryKey = 'id';
}
