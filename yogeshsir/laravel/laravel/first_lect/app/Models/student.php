<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $fillable = ['sname','semail','spassword'];
}
