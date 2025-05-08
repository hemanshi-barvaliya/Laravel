<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'contact_book';
    protected $primayKey = 'id';
    public $incrementing = true;
    protected $fillable = ['name','email','password','contact','image'];
    
    public $timestamps = false;
}
