<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutme extends Model
{
    use HasFactory;
    public $table = 'aboutmes';
    protected $fillable = [
        'title', 'description','degree','exprience','mobile_number', 'address','profile_image'
    ];
}
