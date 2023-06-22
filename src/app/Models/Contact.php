<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 
        'gender', 
        'email', 
        'postcode', 
        'address',
        'building_name',
        'option'
    ];

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
        $query->where('content', 'like', '%' . $keyword . '%');
        }
    }

}
