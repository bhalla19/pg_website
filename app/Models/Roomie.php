<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomie extends Model
{
    use HasFactory;
    protected $table = 'roomies';
    protected $primaryKey = 'roomie_Id';
    protected $guarded = [];
}
