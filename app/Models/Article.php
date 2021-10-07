<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    use HasFactory;

    public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['prefecture'])) {
            $query->where('prefecture', 'like', '%' . $params['prefecture'] . '%');
        }
        
        if (!empty($params['category'])) {
            $query->whereHas('Category', function($q) use ($params){
                $q->where('name', 'like', '%' . $params['category'] . '%');
            });
        }
        

        return $query;
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
