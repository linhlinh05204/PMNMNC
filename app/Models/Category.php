<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','image',
        'parent_id','is_active','is_delete'
    ];

    // Category cha
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    // Category con
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
