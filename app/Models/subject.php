<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $fillable =['class_name','subject','subject_code'];
}
