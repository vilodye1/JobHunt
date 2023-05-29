<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'email', 'location', 'description', 'tags', 'website'];

    // filters tags and search queries
    public function scopeFilter($query, array $filters) {
        // ?? if not false
        if($filters['tag'] ?? false) {
            // % means before or after the request
            $query->where('tag', 'like', '%' . request('tags') . '%');
        }

        if($filters['search'] ?? false) {
            // % means before or after the request
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
