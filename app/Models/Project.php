<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable =
    [
        'project_name',
        'cat_id',
        'languages',
        'project_image',
        'description',
    ];
    public function Category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }
}
