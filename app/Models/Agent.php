<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'email',
        'description',
        'gender',
        'address',
        'agent_company',
        'status',
        'phone_number',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',
        'category_id'

    ];

    public const STATUS = ['in progress', 'blocked', 'approved'];





      public function scopeFilterStatus($query, $filter)
    {
        if (in_array($filter, self::STATUS)) {
            return $query->where('status', $filter);
        }

        return $query;
    }

  //  get is Accessor -  when we fetch data from database
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    function scopeFullName($query, $name)
    {
        // Split each Name by Spaces
        $names = explode(" ", $name);

        // Search each Name Field for any specified Name
        return Agent::where(function($query) use ($names) {
            $query->whereIn('first_name', $names);
            $query->orWhere(function($query) use ($names) {
                $query->whereIn('last_name', $names);
            });
        });
    }
}
