<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $fillable = [
        "name",
        "img_logo",
        "partita_iva"
    ];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
