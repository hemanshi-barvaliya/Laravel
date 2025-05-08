<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'user_profile';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $fillable = ['img_name','profile'];
}
