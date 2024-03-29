<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand ()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type() {
        $model = "App\Models\\". $this->type;
        return $model::find($this->id);
    }
}
