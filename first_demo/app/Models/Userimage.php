<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userimage extends Model
{
    protected $table = 'admin_img';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $fillable = ['img_name','profile'];
    public $timestamps = false;

}
