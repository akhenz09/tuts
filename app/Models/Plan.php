<?php

namespace App\Models;

use App\Models\SubPlan;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    public function subPlans(){
        return $this->hasMany(SubPlan::class);
    }

    public function subscription(){
        return $this->hasMany(Subscription::class);
    }
}
