<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

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

    // Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
