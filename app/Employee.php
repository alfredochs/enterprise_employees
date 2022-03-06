<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "enterprise_id",
        "phone",
        "email"
    ];
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}
