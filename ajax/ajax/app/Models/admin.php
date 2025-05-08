<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'ajax';
    protected $PrimaryKey = 'id';
    public $incrimenting = true;
    protected $fillable = ['name','email','password'];
}
