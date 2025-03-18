<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalAssetsFacebook extends Model
{
    use HasFactory;
    protected $table = 'digital_assets_facebook';
    protected $primaryKey = 'id';
}
