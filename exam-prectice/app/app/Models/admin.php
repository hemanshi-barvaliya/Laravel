<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = 'id';
    public $incrimenting = true;
    protected $fillable = [
                            'name',
                            'email',
                            'password',
                            'hooby',
                            'image'
                        ];
}
