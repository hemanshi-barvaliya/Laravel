<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db extends Model
{
    protected $table = 'db';
    protected $primerykey = 'id';
    public $incrimenting = true;
    protected $fillable = ['name','email','password'];
}

