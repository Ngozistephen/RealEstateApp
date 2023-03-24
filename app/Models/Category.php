<?php

namespace App\Models;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
