<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_ajax extends Model
{
    protected $table = 'new_ajax';
    protected $primerykey = 'id';
    public $incrimenting = true;
    protected $fillable = ['name','email','password'];
}
