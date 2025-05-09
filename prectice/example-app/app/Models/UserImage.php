<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    protected $table = 'user_images';
    protected $primaryKey = 'id';
    public $incrementing =true;
    protected $fillable= ['image_name','profile'];

}
