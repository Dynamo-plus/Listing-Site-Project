<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'desc', 'tags'];

    public function scopeFilter($query, array $filters){
        if ($filters['tags'] ?? false){
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }

        if ($filters['search'] ?? false){
            $query->where('tags', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('desc', 'like', '%' . request('search') . '%')
            ;
        }

    }

    //Listing relationship to User

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
