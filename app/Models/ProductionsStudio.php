<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionsStudio extends Model
{
    use HasFactory;
    protected $table = 'productions_studio';
    protected $primaryKey = 'id';
}
