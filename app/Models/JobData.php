<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobData extends Model
{
    use HasFactory;
    protected $table = 'job_data';
    protected $primaryKey = 'id';
}
