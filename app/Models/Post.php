<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory; 
    protected $guarded = ['id'];
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->where('category', $category);
        });
    }
}