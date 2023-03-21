<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'status',
        'phone_number',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',

    ];

    public const STATUS = ['in progress', 'blocked', 'approved'];





    //   public function scopeFilterStatus($query, $filter)
    // {
    //     if (in_array($filter, self::STATUS)) {
    //         return $query->where('status', $filter);
    //     }

    //     return $query;
    // }
}
