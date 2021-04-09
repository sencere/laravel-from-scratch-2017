<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        if(empty($filters)) {
            return $query;
        }

        if($month = $filters['month']) {
            $query->whereMonth('created_at', $month);
        }

        if($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }

        return $query;
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, month(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
