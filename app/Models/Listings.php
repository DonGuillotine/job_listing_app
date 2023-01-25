<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'logo', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters){
        // dd($filters['tag']);

        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%')->orWhere('company', 'like', '%' . request('search') . '%');
        }
    }

    public function user(){
        // The Listing Model belongs to a User
        return $this->belongsTo(User::class, 'user_id');
    }
}
